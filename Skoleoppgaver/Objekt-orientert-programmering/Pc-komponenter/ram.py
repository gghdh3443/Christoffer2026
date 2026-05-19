# Importerer superklassen PCKomponent fra pckomponenter.py

from pckomponenter import PCKomponent

#Lager en underklasse RAM som arver fra PCKomponent

class RAM(PCKomponent):
    def __init__(self, merke, modell, pris, tilstand, år, kapasitet_gb, mhz):
        super().__init__(merke, modell, pris, tilstand, år)
        self.kapasitet_gb = kapasitet_gb
        self.mhz = mhz

    def vis_komponent(self):
        print("\n[RAM]")
        super().vis_komponent()
        print(f"Kapasitet: {self.kapasitet_gb} GB, {self.mhz} MHz")


# Lager noen RAM-objekter for testing.

ram1 = RAM("Corsair", "Vengeance LPX", 800, "Brukt", 2019, 16, 3200)
ram2 = RAM("G.Skill", "Trident Z RGB", 1200, "Som ny", 2021, 32, 3600)

# Viser informasjon om RAM-modulene.
ram1.vis_komponent()
ram2.vis_komponent()