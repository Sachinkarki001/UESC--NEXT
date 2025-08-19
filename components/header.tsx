"use client"

import { Button } from "@/components/ui/button"
import { Phone, Mail, MapPin, ChevronDown, ChevronRight } from "lucide-react"
import { useState } from "react"

export function Header() {
  const [activeDropdown, setActiveDropdown] = useState<string | null>(null)
  const [activeSubmenu, setActiveSubmenu] = useState<string | null>(null)
  const [activeNestedSubmenu, setActiveNestedSubmenu] = useState<string | null>(null)

  const menuItems = [
    {
      title: "About UESC",
      items: [
        "Facts and Figure",
        {
          title: "Policies and Governance",
          submenu: ["Our Policies", "Governing Board", "College Management Committee"],
        },
        {
          title: "IQAC",
          submenu: ["RMC", "ECC"],
        },
      ],
    },
    {
      title: "Academics",
      items: [
        "Notifications",
        {
          title: "Academic Programs",
          submenu: ["Graduate", "Undergraduate"],
        },
        "Academic Calendar",
        "Fee Structure",
        "Faculty Members",
        {
          title: "Departments",
          submenu: [
            {
              title: "Civil Engineering",
              submenu: ["UG", "Graduate Construction Management", "Graduate Transportation Engineering and Management"],
            },
            "Computer Engineering",
            "Architecture",
          ],
        },
        {
          title: "Research & Publication",
          submenu: [
            "RMC",
            "Research Management Cell/ICAS",
            "Students' Research",
            "Faculty Research",
            "Strategic Consultancy",
          ],
        },
        {
          title: "Faculty Development Program",
          submenu: ["Faculty Training Programs", "Conference, Seminars & Workshops", "Study Visit"],
        },
        {
          title: "Students' Development",
          submenu: ["Special Lecture", "Training on Special Skills", "Students Club"],
        },
      ],
    },
    {
      title: "ECA",
      items: [
        "Sports, Blood Donation, Cultural, Community Development, Literary, Picnics, Excursions",
        "Welcome and Farewell",
      ],
    },
    {
      title: "Career Support",
      items: ["Alumni", "Publications", "Resources", "Library", "EMIS"],
    },
    {
      title: "Empowering Students",
      items: ["Counselling", "Other Student Support"],
    },
    {
      title: "Serving The Nation",
      items: ["Serving The Community"],
    },
    {
      title: "Download",
      items: ["Syllabus", "Old Question", "Gallery"],
    },
    {
      title: "News",
      items: ["Latest News", "Announcements", "Press Releases"],
    },
  ]

  const renderMenuItem = (item: any, itemIndex: number) => {
    if (typeof item === "string") {
      return (
        <a
          key={itemIndex}
          href="#"
          className="block px-4 py-2 text-sm text-foreground hover:bg-muted hover:text-primary transition-colors"
        >
          {item}
        </a>
      )
    } else {
      return (
        <div
          key={itemIndex}
          className="relative"
          onMouseEnter={() => setActiveSubmenu(item.title)}
          onMouseLeave={() => setActiveSubmenu(null)}
        >
          <button className="flex items-center justify-between w-full px-4 py-2 text-sm text-foreground hover:bg-muted hover:text-primary transition-colors">
            {item.title}
            <ChevronRight className="h-4 w-4" />
          </button>

          {activeSubmenu === item.title && item.submenu && (
            <div className="absolute top-0 left-full bg-white shadow-lg border border-border rounded-md py-2 min-w-48 z-50">
              {item.submenu.map((subItem: any, subIndex: number) => {
                if (typeof subItem === "string") {
                  return (
                    <a
                      key={subIndex}
                      href="#"
                      className="block px-4 py-2 text-sm text-foreground hover:bg-muted hover:text-primary transition-colors"
                    >
                      {subItem}
                    </a>
                  )
                } else {
                  return (
                    <div
                      key={subIndex}
                      className="relative"
                      onMouseEnter={() => setActiveNestedSubmenu(subItem.title)}
                      onMouseLeave={() => setActiveNestedSubmenu(null)}
                    >
                      <button className="flex items-center justify-between w-full px-4 py-2 text-sm text-foreground hover:bg-muted hover:text-primary transition-colors">
                        {subItem.title}
                        <ChevronRight className="h-4 w-4" />
                      </button>

                      {activeNestedSubmenu === subItem.title && subItem.submenu && (
                        <div className="absolute top-0 left-full bg-white shadow-lg border border-border rounded-md py-2 min-w-64 z-50">
                          {subItem.submenu.map((nestedItem: string, nestedIndex: number) => (
                            <a
                              key={nestedIndex}
                              href="#"
                              className="block px-4 py-2 text-sm text-foreground hover:bg-muted hover:text-primary transition-colors"
                            >
                              {nestedItem}
                            </a>
                          ))}
                        </div>
                      )}
                    </div>
                  )
                }
              })}
            </div>
          )}
        </div>
      )
    }
  }

  return (
    <header className="bg-background border-b border-border relative z-50">
      <div className="bg-primary text-primary-foreground py-2">
        <div className="container mx-auto px-4 flex flex-col sm:flex-row justify-between items-center text-sm">
          <div className="flex items-center gap-4 mb-2 sm:mb-0">
            <div className="flex items-center gap-1">
              <Phone className="h-3 w-3" />
              <span>+977-1-5268419 / +977-1-5268592</span>
            </div>
            <div className="flex items-center gap-1">
              <Mail className="h-3 w-3" />
              <span>info@uesc.edu.np</span>
            </div>
          </div>
          <div className="flex items-center gap-1">
            <MapPin className="h-3 w-3" />
            <span>Chakupat, Patan, Lalitpur</span>
          </div>
        </div>
      </div>

      <nav className="container mx-auto py-4 px-0">
        <div className="flex items-center justify-between">
          <div className="flex items-center gap-3 mr-2">
            <img src="/images/uesc-logo.png" alt="UESC Logo" className="w-16 h-16 object-contain" />
          </div>

          <div className="hidden lg:flex items-center gap-6">
            {menuItems.map((menu, index) => (
              <div
                key={index}
                className="relative"
                onMouseEnter={() => setActiveDropdown(menu.title)}
                onMouseLeave={() => {
                  setActiveDropdown(null)
                  setActiveSubmenu(null)
                  setActiveNestedSubmenu(null)
                }}
              >
                <button className="flex items-center gap-1 text-foreground hover:text-primary transition-colors py-2">
                  {menu.title}
                  <ChevronDown className="h-4 w-4" />
                </button>

                {activeDropdown === menu.title && menu.items && (
                  <div className="absolute top-full left-0 bg-white shadow-lg border border-border rounded-md py-2 min-w-64 z-50">
                    {menu.items.map((item, itemIndex) => renderMenuItem(item, itemIndex))}
                  </div>
                )}
              </div>
            ))}

            <a href="#gallery" className="text-foreground hover:text-primary transition-colors">
              Online Admission
            </a>
            <Button variant="default" size="sm" className="bg-secondary hover:bg-secondary/90">
              Apply Now
            </Button>
          </div>
        </div>
      </nav>
    </header>
  )
}
