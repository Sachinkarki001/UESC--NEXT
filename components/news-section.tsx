import { Card, CardContent } from "@/components/ui/card"

export function NewsSection() {
  const newsItems = [
    {
      id: 1,
      title: "UESC Receives Excellence Award in Engineering Education",
      description:
        "Universal Engineering & Science College has been recognized for its outstanding contribution to engineering education in Nepal, receiving the prestigious Excellence Award from the Ministry of Education.",
      date: "15 Dec 2024",
      image: "/placeholder-qugao.png",
    },
    {
      id: 2,
      title: "New Research Lab Inaugurated for Advanced Computing",
      description:
        "The college has inaugurated a state-of-the-art research laboratory equipped with latest computing facilities to enhance research capabilities in computer engineering and artificial intelligence.",
      date: "10 Dec 2024",
      image: "/modern-computer-lab.png",
    },
    {
      id: 3,
      title: "Industry Partnership Program Launched",
      description:
        "UESC announces new partnership program with leading engineering companies to provide students with real-world experience and enhanced placement opportunities in the industry.",
      date: "5 Dec 2024",
      image: "/engineering-partnership-handshake.png",
    },
  ]

  return (
    <section className="py-16 bg-gray-50">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-[#003893] mb-4">Latest News</h2>
          <div className="w-24 h-1 bg-[#DC143C] mx-auto"></div>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {newsItems.map((news) => (
            <Card
              key={news.id}
              className="overflow-hidden hover:shadow-lg transition-shadow duration-300 bg-white border-0 shadow-md"
            >
              <div className="relative">
                <img src={news.image || "/placeholder.svg"} alt={news.title} className="w-full h-48 object-cover" />
                <div className="absolute top-4 right-4 bg-[#DC143C] text-white px-3 py-1 rounded-full text-sm font-medium">
                  {news.date}
                </div>
              </div>
              <CardContent className="p-6">
                <h3 className="text-xl font-semibold text-[#003893] mb-3 line-clamp-2">{news.title}</h3>
                <p className="text-gray-600 text-sm leading-relaxed line-clamp-3">{news.description}</p>
                <div className="mt-4">
                  <button className="text-[#DC143C] font-medium text-sm hover:text-[#003893] transition-colors duration-200">
                    Read More →
                  </button>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="text-center mt-8">
          <button className="bg-[#003893] text-white px-8 py-3 rounded-lg font-medium hover:bg-[#DC143C] transition-colors duration-300">
            View All News
          </button>
        </div>
      </div>
    </section>
  )
}
