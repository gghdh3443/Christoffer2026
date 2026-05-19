# Importerer superklassen PCKomponent fra pckomponenter.py.

from pckomponenter import PCKomponent

#Lager en underklasse Grafikkort som arver fra PCKomponent.

class Grafikkort(PCKomponent):         
    def __init__(self, merke, modell, pris, tilstand, år, vram_gb):
        super().__init__(merke, modell, pris, tilstand, år)  
        self.vram_gb = vram_gb           

# kode for å vise komponent.
    def vis_komponent(self):
        print("\n[Grafikkort]")
        super().vis_komponent()          
        print(f"VRAM: {self.vram_gb} GB")


# Lager noen graffikkort-objekter for testing.

gpu1 = Grafikkort("NVIDIA", "RTX 3080", 4500, "Brukt", 2021, 10)
gpu2 = Grafikkort("AMD", "RX 6700 XT", 3200, "Som ny", 2022, 12)

# Viser informasjon om grafikkortene.
gpu1.vis_komponent()
gpu2.vis_komponent()