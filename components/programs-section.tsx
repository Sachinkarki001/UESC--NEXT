import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { Building2, Computer, GraduationCap } from "lucide-react"

export function ProgramsSection() {
  const programs = [
    {
      title: "BACHELOR IN CIVIL ENGINEERING",
      icon: Building2,
      description:
        "Comprehensive civil engineering program focusing on infrastructure development and construction management.",
      duration: "4 Years",
      affiliation: "Pokhara University",
    },
    {
      title: "BACHELOR IN COMPUTER ENGINEERING",
      icon: Computer,
      description:
        "Modern computer engineering curriculum covering software development, hardware systems, and emerging technologies.",
      duration: "4 Years",
      affiliation: "Pokhara University",
    },
    {
      title: "MSc PROGRAMS",
      icon: GraduationCap,
      description:
        "Advanced postgraduate programs in Construction Management and Transportation Engineering & Management.",
      duration: "2 Years",
      affiliation: "Pokhara University",
    },
  ]

  return (
    <section id="academics" className="py-16">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-primary mb-4">ACADEMIC PROGRAMMES</h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Quality engineering education with modern curriculum and excellent faculty
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {programs.map((program, index) => (
            <Card key={index} className="hover:shadow-lg transition-shadow duration-300 border-border">
              <CardHeader className="text-center pb-4">
                <div className="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                  <program.icon className="h-8 w-8 text-secondary" />
                </div>
                <CardTitle className="font-serif text-lg text-primary">{program.title}</CardTitle>
              </CardHeader>
              <CardContent className="text-center">
                <p className="text-muted-foreground mb-4 text-sm leading-relaxed">{program.description}</p>
                <div className="space-y-2 mb-6">
                  <div className="text-sm">
                    <span className="font-semibold">Duration:</span> {program.duration}
                  </div>
                  <div className="text-sm">
                    <span className="font-semibold">Affiliation:</span> {program.affiliation}
                  </div>
                </div>
                <Button
                  variant="outline"
                  className="w-full bg-transparent border-primary text-primary hover:bg-primary hover:text-white"
                >
                  See More →
                </Button>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  )
}
