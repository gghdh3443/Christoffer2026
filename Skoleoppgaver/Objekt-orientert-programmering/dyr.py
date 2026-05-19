# Program start

#Klassen Dyr:
class Dyr:
    def __init__(self,navn, alder, art):
        self.navn = navn
        self.alder = alder
        self.art = art
    
    def presenter(self):
        print(f"Jeg heter {self.navn} og jeg er {self.alder} år. Jeg er en {self.art}")

    def bli_et_år_eldre(self):
        self.alder = int(self.alder) + 1
        print(f"{self.navn} er nå {self.alder} år gammel.")


class Hund(Dyr):
    def __init__(self, navn, alder, rase):
        super().__init__(navn, alder, "Hund")
        self.rase = rase

    def presenter(self):
        print(f"Jeg heter {self.navn} og jeg er {self.alder} år. Jeg er en {self.art} og er en {self.rase}")

    def lag_lyd(self):
        print(f"Voff!")

    def hent(self):
        print(f"{self.navn} henter ballen!")


class Katt(Dyr):
    def __init__(self, navn, alder, favorittmat):
        super().__init__(navn, alder, "Katt")
        self.favorittmat = favorittmat

    def presenter(self):
        print(f"Jeg heter {self.navn} og jeg er {self.alder} år. Jeg er en {self.art} og favoritt maten min er {self.favorittmat}")

    def lag_lyd(self):
        print(f"Mjau!")

    def klatre_paa_trar(self):
        print(f"{self.navn} klatrer opp i et tre!")

# Informasjon om dyrene
dyr_en = Dyr("Rudolf", 10, "Reinsdyr")
dyr_to = Dyr("Golfis", 5, "Koala")
dyr_tre = Dyr("Mumbaii", 8, "Indifsk Elefant")
dyr_fire = Dyr("Gulle", 1, "Gullfisk")

# Underrase Hund og katt
hund_en = Hund("Whiskey", 4, "Labrador")
hund_to = Hund("Bamse", 7, "Golden Retriever")

katt_en = Katt("Mia", 3, "Kjøttboller")
katt_to = Katt("Simba", 2, "Fisk")

#Kjører en handling for å vise dyr 1 og 2
dyr_en.presenter()
dyr_to.presenter()

#Kjører en handling som gjør dyr 3 og 4, 1 år eldre
dyr_tre.bli_et_år_eldre()
dyr_fire.bli_et_år_eldre()

#Kjører en handling som printer ut Dyr 1, 2 ,3 og 4.
dyr_en.presenter()
dyr_to.presenter()
dyr_tre.presenter()
dyr_fire.presenter()

#Kjører en handling som printer ut Hund 1 og 2, og Katt 1 og 2
hund_en.presenter()
hund_to.presenter()
katt_en.presenter()
katt_to.presenter()

#Kjører en handling som får Hund 1 og 2, og Katt 1 og 2 til å lage lyd
hund_en.lag_lyd()
hund_to.lag_lyd()
katt_en.lag_lyd()
katt_to.lag_lyd()

#Kjører en handling som får Hund 1 og 2 til å hente, og Katt 1 og 2 til å klatre i trær
hund_en.hent()
hund_to.hent()
katt_en.klatre_paa_trar()
katt_to.klatre_paa_trar()










    

