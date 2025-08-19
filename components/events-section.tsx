import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { Calendar, Users, Award } from "lucide-react"

export function EventsSection() {
  const events = [
    {
      title: "Student Leadership Election 2080",
      date: "23 Nov 2025",
      icon: Users,
      description: "Annual student leadership election for academic year 2080",
      image: "/student-election.png",
    },
    {
      title: "Parents Seminar 2078",
      date: "23 Nov 2024",
      icon: Award,
      description: "Interactive seminar for parents and guardians",
      image: "/college-parents-meeting.png",
    },
    {
      title: "Engineering Workshop",
      date: "15 Dec 2025",
      icon: Calendar,
      description: "Hands-on engineering workshop for students",
      image: "/engineering-workshop.png",
    },
  ]

  return (
    <section id="events" className="py-16 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-primary mb-4">LATEST EVENTS</h2>
          <p className="text-muted-foreground">Stay updated with our college activities and programs</p>
        </div>

        <div className="grid md:grid-cols-3 gap-6">
          {events.map((event, index) => (
            <Card key={index} className="hover:shadow-lg transition-shadow duration-300 overflow-hidden">
              <div className="h-48 bg-cover bg-center" style={{ backgroundImage: `url('${event.image}')` }}>
                <div className="h-full bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
                  <div className="text-white text-sm font-medium">{event.date}</div>
                </div>
              </div>
              <CardHeader className="pb-3">
                <div className="flex items-center gap-3 mb-2">
                  <div className="w-10 h-10 bg-secondary/10 rounded-full flex items-center justify-center">
                    <event.icon className="h-5 w-5 text-secondary" />
                  </div>
                </div>
                <CardTitle className="text-lg font-semibold text-primary">{event.title}</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-muted-foreground text-sm mb-4">{event.description}</p>
                <Button
                  variant="outline"
                  size="sm"
                  className="border-primary text-primary hover:bg-primary hover:text-white bg-transparent"
                >
                  Learn More
                </Button>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="text-center mt-8">
          <Button variant="secondary">VIEW ALL EVENTS</Button>
        </div>
      </div>
    </section>
  )
}
