export function GallerySection() {
  const galleryImages = [
    {
      src: "/engineering-students-computer-lab.png",
      alt: "Computer Lab",
    },
    {
      src: "/placeholder-tpoc2.png",
      alt: "Civil Engineering Field Work",
    },
    {
      src: "/images/industry/education.png",
      alt: "Graduation Ceremony",
    },
    {
      src: "/placeholder-agpz6.png",
      alt: "Campus Building",
    },
    {
      src: "/engineering-workshop.png",
      alt: "Engineering Workshop",
    },
    {
      src: "/college-seminar-hall.png",
      alt: "Seminar Hall",
    },
  ]

  return (
    <section id="gallery" className="py-16">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-primary mb-4">GALLERY</h2>
          <p className="text-muted-foreground">Glimpses of campus life and academic activities</p>
        </div>

        <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
          {galleryImages.map((image, index) => (
            <div key={index} className="relative overflow-hidden rounded-lg group cursor-pointer">
              <img
                src={image.src || "/placeholder.svg"}
                alt={image.alt}
                className="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110"
              />
              <div className="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                <span className="text-primary-foreground font-semibold">{image.alt}</span>
              </div>
            </div>
          ))}
        </div>

        <div className="text-center mt-8">
          <button className="text-accent hover:text-accent/80 font-semibold">SEE MORE →</button>
        </div>
      </div>
    </section>
  )
}
