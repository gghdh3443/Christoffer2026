# System for å administre deltakere til skøyteløp

# Importerer biblioteket OS for å kunne tømme konsolet med CLS (clear screen).
import os

# Deltakerlister
fornavn = ["Håkon","Kari","Stine","Fred","Kjell","Tove","Hans"]
alder = [14,15,17,19,20,22,22]
kjonn = ["mann","kvinne","kvinne","mann","mann","kvinne","mann"]

# funksjon for meny
def meny():
    print("\nMENY FOR SKØYTESTEVNE")
    print("1. Registrer deltaker")
    print("2. Skriv ut en oversikt over deltagerne med navn, alder og kjønn")
    print("3. Vis antall menn og kvinner blant deltakerne")
    print("4. Fjern en deltaker fra listene")
    print("5. Skriv ut alle deltagere fra og med 15 år til og med 19 år")
    print("6. Lag en startliste der deltakere skal parvis gå mot hverandre. Velg om listen skal være for kvinner eller menn")
    print("7. Avslutt\n")


#Funksjoner

#lager en funksjon som registrerer en ny deltaker
def registrer_deltaker():
    print("\nRegistrer deltaker")
    nytt_fornavn = input("Skriv inn fornavn: ")
    ny_alder = int(input("Skriv inn alder: "))
    nytt_kjonn = input("Skriv inn kjønn: ")

    fornavn.append(nytt_fornavn)
    alder.append(ny_alder)
    kjonn.append(nytt_kjonn)

    print(f"{nytt_fornavn} er registrert som deltaker.")


#Lager funksjon som skriver ut alle deltakere
def skriv_ut_deltakere():
    print("\nOversikt over deltakere:")
    for i in range(len(fornavn)):
        print(f"{fornavn[i]}, {alder[i]}, {kjonn[i]}")
    

#Lager en funksjon som viser antall menn og kvinner
def vis_kjonn():
    print("\nAntall menn og kvinner:")

    antall_menn = kjonn.count("mann")
    antall_kvinner = kjonn.count("kvinne")

    print(f"Antall menn: {antall_menn}")
    print(f"Antall kvinner: {antall_kvinner}")


#Lager en funksjon som fjerner en deltaker
def fjern_deltaker():
    fjern_navn = input("Skriv inn fornavnet til deltakeren du vil fjerne: ")

    for i in range(len(fornavn)):
        if fornavn[i] == fjern_navn:
            fornavn.pop(i)
            alder.pop(i)
            kjonn.pop(i)
            print("Deltaker fjernet.")
            return

    print("Fant ikke deltakeren.")
           


#Lager en funksjon som viser deltakere mellom 15 og 19 år
def vis_aldersgruppe():
    print("\nDeltakere mellom 15 og 19 år:")


#Lager en funksjon som lager en startliste for menn eller kvinner
def lag_startliste():
    print("\nLag startliste")





#En while-løkke for menyen

while True:
    meny()
    valg = input("Skriv inn ditt valg: ")

    if valg == "1":
        registrer_deltaker()
    elif valg == "2":
        skriv_ut_deltakere()
    elif valg == "3":
        vis_kjonn()
    elif valg == "4":
        fjern_deltaker()
    elif valg == "5":
        vis_aldersgruppe()
    elif valg == "6":
        lag_startliste()
    elif valg == "7":
        print("Avslutter programmet. Ha en fin dag!")
        break
    else:
        print("Ugyldig valg. Prøv igjen.")