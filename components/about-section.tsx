import { Button } from "@/components/ui/button"
import { Card, CardContent } from "@/components/ui/card"

export function AboutSection() {
  return (
    <section id="about" className="py-16 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="font-serif text-3xl md:text-4xl font-bold text-primary mb-6">ABOUT UESC</h2>
            <div className="space-y-4 text-muted-foreground leading-relaxed">
              <p>
                Universal Engineering & Science College was established in 2000 A.D. and is located in Chakupat, Patan
                at the heart of Kathmandu Valley. UESC runs B.E. Civil, B.E. Computer under the affiliation of Pokhara
                University with the aim to foster higher education in Nepal with quality output.
              </p>
              <p>
                The college has achieved astounding success in the field of education in a short span of time and it
                plans to add some new educational courses every year so that quality education in every field becomes
                available under a roof for the convenience of the students.
              </p>
              <p>
                In order to provide a highly technical environment and to cultivate basic technical skills the college
                imparts excellent training to the students.
              </p>
            </div>
            <Button className="mt-6" variant="secondary">
              READ MORE
            </Button>
          </div>

          <div className="relative">
            <img src="/engineering-students-lab.png" alt="UESC Students" className="rounded-lg shadow-lg w-full" />
            <Card className="absolute -bottom-6 -left-6 bg-secondary text-secondary-foreground">
              <CardContent className="p-4">
                <div className="text-2xl font-bold">24+</div>
                <div className="text-sm">Years of Excellence</div>
              </CardContent>
            </Card>
          </div>
        </div>
      </div>
    </section>
  )
}
