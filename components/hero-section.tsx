"use client"

import { Button } from "@/components/ui/button"
import { useState, useEffect } from "react"
import { ChevronLeft, ChevronRight } from "lucide-react"

export function HeroSection() {
  const [currentSlide, setCurrentSlide] = useState(0)

  const slides = [
    {
      image: "/engineering-students-lab.png",
      title: "WELCOME TO UESC",
      subtitle: "Excellence in Engineering Education",
      description:
        "Universal Engineering & Science College was established in 2000 A.D. and is located in Chakupat, Patan at the heart of Kathmandu Valley.",
    },
    {
      image: "/modern-college-campus.png",
      title: "QUALITY EDUCATION",
      subtitle: "Shaping Future Engineers",
      description:
        "UESC runs B.E. Civil, B.E. Computer under the affiliation of Pokhara University with the aim to foster higher education in Nepal.",
    },
    {
      image: "/images/industry/education.png",
      title: "TECHNICAL EXCELLENCE",
      subtitle: "Innovation & Research",
      description:
        "In order to provide a highly technical environment and to cultivate basic technical skills the college imparts excellent training to the students.",
    },
  ]

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentSlide((prev) => (prev + 1) % slides.length)
    }, 5000)
    return () => clearInterval(timer)
  }, [slides.length])

  const nextSlide = () => {
    setCurrentSlide((prev) => (prev + 1) % slides.length)
  }

  const prevSlide = () => {
    setCurrentSlide((prev) => (prev - 1 + slides.length) % slides.length)
  }

  return (
    <section className="relative h-[600px] overflow-hidden">
      {slides.map((slide, index) => (
        <div
          key={index}
          className={`absolute inset-0 transition-opacity duration-1000 ${
            index === currentSlide ? "opacity-100" : "opacity-0"
          }`}
        >
          <div
            className="absolute inset-0 bg-cover bg-center"
            style={{
              backgroundImage: `url('${slide.image}')`,
            }}
          />
          <div className="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/70 to-transparent" />

          {/* Overlapping text content */}
          <div className="relative h-full flex items-center">
            <div className="container mx-auto px-4">
              <div className="max-w-3xl text-white">
                <div className="bg-secondary/20 backdrop-blur-sm rounded-lg p-8 border border-white/20">
                  <h1 className="font-serif text-4xl md:text-6xl font-bold mb-4 leading-tight">{slide.title}</h1>
                  <h2 className="text-xl md:text-2xl font-semibold mb-6 text-secondary-foreground">{slide.subtitle}</h2>
                  <p className="text-lg md:text-xl mb-8 leading-relaxed opacity-90">{slide.description}</p>
                  <div className="flex flex-col sm:flex-row gap-4">
                    <Button size="lg" variant="secondary" className="text-lg px-8 py-3">
                      Explore Programs
                    </Button>
                    <Button
                      size="lg"
                      variant="outline"
                      className="text-lg px-8 py-3 border-white text-white hover:bg-white hover:text-primary bg-transparent"
                    >
                      Online Enquiry
                    </Button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      ))}

      {/* Navigation arrows */}
      <button
        onClick={prevSlide}
        className="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-2 transition-colors"
      >
        <ChevronLeft className="h-6 w-6 text-white" />
      </button>
      <button
        onClick={nextSlide}
        className="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-2 transition-colors"
      >
        <ChevronRight className="h-6 w-6 text-white" />
      </button>

      {/* Slide indicators */}
      <div className="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2">
        {slides.map((_, index) => (
          <button
            key={index}
            onClick={() => setCurrentSlide(index)}
            className={`w-3 h-3 rounded-full transition-colors ${index === currentSlide ? "bg-white" : "bg-white/50"}`}
          />
        ))}
      </div>
    </section>
  )
}
