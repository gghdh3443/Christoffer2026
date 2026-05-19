class PCKomponent:
    def __init__(self, merke, modell, pris, tilstand, år):
        self.merke = merke
        self.modell = modell
        self.pris = pris
        self.tilstand = tilstand
        self.år = år

    def vis_komponent(self):
        print(f"Merke: {self.merke}")
        print(f"Modell: {self.modell}")
        print(f"Pris: {self.pris} kr")
        print(f"Tilstand: {self.tilstand}")
        print(f"År: {self.år}")