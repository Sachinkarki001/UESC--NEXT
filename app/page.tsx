import { Header } from "@/components/header"
import { HeroSection } from "@/components/hero-section"
import { AboutSection } from "@/components/about-section"
import { ProgramsSection } from "@/components/programs-section"
import { EventsSection } from "@/components/events-section"
import { NewsSection } from "@/components/news-section"
import { GallerySection } from "@/components/gallery-section"
import { Footer } from "@/components/footer"

export default function HomePage() {
  return (
    <main className="min-h-screen">
      <Header />
      <HeroSection />
      <AboutSection />
      <ProgramsSection />
      <EventsSection />
      <NewsSection />
      <GallerySection />
      <Footer />
    </main>
  )
}
