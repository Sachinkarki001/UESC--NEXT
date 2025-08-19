import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Card, CardContent } from "@/components/ui/card"

export function NewsletterSection() {
  return (
    <section className="py-16 bg-accent/5">
      <div className="container mx-auto px-4">
        <div className="max-w-2xl mx-auto">
          <Card className="border-accent/20">
            <CardContent className="p-8">
              <div className="grid md:grid-cols-2 gap-8 items-center">
                <div>
                  <h3 className="font-serif text-2xl font-bold text-primary mb-4">SUBSCRIBE TO UESC'S NEWSLETTER</h3>
                  <p className="text-muted-foreground mb-6">
                    Stay updated with the latest news, events, and announcements from UESC.
                  </p>
                  <div className="flex gap-2">
                    <Input type="email" placeholder="Enter Your Email" className="flex-1" />
                    <Button variant="default">SUBSCRIBE</Button>
                  </div>
                </div>
                <div className="text-center">
                  <img
                    src="/man-red-shirt-newsletter.png"
                    alt="Newsletter Signup"
                    className="w-48 h-48 mx-auto rounded-lg"
                  />
                </div>
              </div>
            </CardContent>
          </Card>
        </div>
      </div>
    </section>
  )
}
