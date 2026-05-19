# Importerer superklassen PCKomponent fra pckomponenter.py

from pckomponenter import PCKomponent


#Lager en underklasse Hovedkort som arver fra PCKomponent
class Hovedkort(PCKomponent):
    def __init__(self, merke, modell, pris, tilstand, år, sokkel, minneplasser):
        super().__init__(merke, modell, pris, tilstand, år)
        self.sokkel = sokkel
        self.minneplasser = minneplasser

    def vis_komponent(self):
        print("\n[Hovedkort]")
        super().vis_komponent()
        print(f"Sokkel: {self.sokkel}, Minneplasser: {self.minneplasser}")
    
# Lager noen Hovedkort-objekter for testing.
hovedkort1 = Hovedkort("ASUS", "ROG Strix Z390-E", 2500, "Som ny", 2019, "LGA1151", 4)
hovedkort2 = Hovedkort("MSI", "B450 Tomahawk Max", 1500, "Brukt", 2018, "AM4", 4)
hovedkort3 = Hovedkort("Gigabyte", "Z490 AORUS Master", 5500, "Som ny", 2020, "LGA1200", 4)

# Viser informasjon om hovedkortene.
hovedkort1.vis_komponent()
hovedkort2.vis_komponent()
hovedkort3.vis_komponent()
