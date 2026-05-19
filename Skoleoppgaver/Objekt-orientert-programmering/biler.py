class Bil:
    def __init__(self, merke, modell, farge, år, eier):
        self.merke = merke
        self.farge = farge
        self.modell = modell
        self.år = år
        self.eier = eier
        self.fart = 0

    def vis_info(self):
        print(f"Merke: {self.merke}, Modell: {self.modell}, Farge: {self.farge}, År: {self.år}, Fart: {self.fart} km/t, Eier: {self.eier}")
    
    def gasser(self):
        self.fart += 10


Bil_en = Bil("Toyota", "iQ", "Blå", "2015", "Rolf Nilsen")
Bil_to = Bil("Nissan", "Leaf", "Hvit", "2018", "Ada Johanne" )
Bil_tre = Bil("Ford", "Ranger", "2019", "Grå", "Lars Olaf")
Bil_fire = Bil("Ford", "Nitro", "2019", "Gul", "Emine Olaf")


Bil_en.vis_info()
Bil_to.vis_info()
Bil_tre.vis_info()
Bil_fire.vis_info()

Bil_en.gasser()
Bil_to.gasser()
Bil_tre.gasser()
Bil_fire.gasser()


Bil_en.vis_info()
Bil_to.vis_info()
Bil_tre.vis_info()
Bil_fire.vis_info()

