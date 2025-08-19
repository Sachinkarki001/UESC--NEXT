import { Phone, Mail, MapPin, Facebook, Twitter, Instagram, Linkedin } from "lucide-react"

export function Footer() {
  return (
    <footer className="bg-sidebar text-sidebar-foreground">
      <div className="container mx-auto px-4 py-12">
        <div className="grid md:grid-cols-4 gap-8">
          <div>
            <div className="flex items-center gap-3 mb-4">
              <img src="/images/uesc-logo.png" alt="UESC Logo" className="w-12 h-12 object-contain" />
              <div>
                <h3 className="font-serif font-bold text-lg text-primary">UESC</h3>
                <p className="text-xs text-muted-foreground">Engineering Excellence</p>
              </div>
            </div>
            <p className="text-sm text-muted-foreground leading-relaxed">
              Fostering higher education in Nepal with quality output since 2000 A.D.
            </p>
          </div>

          {/* Courses */}
          <div>
            <h4 className="font-semibold mb-4 text-primary">Courses</h4>
            <ul className="space-y-2 text-sm text-muted-foreground">
              <li>Bachelor in Civil Engineering</li>
              <li>Bachelor in Computer Engineering</li>
              <li>MSc in Construction Management</li>
              <li>MSc in Transportation Engineering & Management</li>
            </ul>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-semibold mb-4 text-primary">Quick Links</h4>
            <ul className="space-y-2 text-sm text-muted-foreground">
              <li>
                <a href="#" className="hover:text-primary transition-colors">
                  Alumni
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-primary transition-colors">
                  Publication
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-primary transition-colors">
                  Library
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-primary transition-colors">
                  Extra Curricular
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-primary transition-colors">
                  Career Counselling
                </a>
              </li>
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h4 className="font-semibold mb-4 text-primary">Get in Touch</h4>
            <div className="space-y-3 text-sm">
              <div className="flex items-start gap-2">
                <Phone className="h-4 w-4 text-primary mt-0.5 flex-shrink-0" />
                <div>
                  <div>+977-1-5268419/5268592</div>
                  <div>+977 9869055176</div>
                </div>
              </div>
              <div className="flex items-start gap-2">
                <MapPin className="h-4 w-4 text-primary mt-0.5 flex-shrink-0" />
                <div>137/20, Manido Marg, Chakupat, Ward 11, Lalitpur Metropolitan City, Nepal</div>
              </div>
              <div className="flex items-center gap-2">
                <Mail className="h-4 w-4 text-primary flex-shrink-0" />
                <div>info@uesc.edu.np</div>
              </div>
            </div>

            {/* Social Media */}
            <div className="mt-6">
              <h5 className="font-semibold mb-3 text-primary">Follow Us</h5>
              <div className="flex gap-3">
                <Facebook className="h-5 w-5 text-muted-foreground hover:text-primary cursor-pointer transition-colors" />
                <Twitter className="h-5 w-5 text-muted-foreground hover:text-primary cursor-pointer transition-colors" />
                <Instagram className="h-5 w-5 text-muted-foreground hover:text-secondary cursor-pointer transition-colors" />
                <Linkedin className="h-5 w-5 text-muted-foreground hover:text-primary cursor-pointer transition-colors" />
              </div>
            </div>
          </div>
        </div>

        <div className="border-t border-sidebar-border mt-8 pt-6 text-center text-sm text-muted-foreground">
          <p>© 2024 Universal Engineering & Science College | Powered by InGrails</p>
        </div>
      </div>
    </footer>
  )
}
