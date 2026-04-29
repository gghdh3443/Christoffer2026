# Importerer superklassen PCKomponent fra pckomponenter.py

from pckomponenter import PCKomponent


#Lager en underklasse Prosessor som arver fra PCKomponent

class Prosessor(PCKomponent):
    def __init__(self, merke, modell, pris, tilstand, år, kjerner, ghz):
        super().__init__(merke, modell, pris, tilstand, år)
        self.kjerner = kjerner
        self.ghz = ghz

    def vis_komponent(self):
        print("\n[Prosessor]")
        super().vis_komponent()
        print(f"Kjerner: {self.kjerner}, Hastighet: {self.ghz} GHz")


# Lager noen prosessor-objekter for testing.

cpu1 = Prosessor("Intel", "Core i7-10700K", 3500, "Brukt", 2020, 8, 3.8)
cpu2 = Prosessor("AMD", "Ryzen 5 5600X", 2500, "Som ny", 2021, 6, 3.7)

# Viser informasjon om prosessorene.
cpu1.vis_komponent()
cpu2.vis_komponent()