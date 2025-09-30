class Druzyna:
    def __init__(self, a, b):
        self.punkty = a
        self.nazwa = b

class LigaPodworkowa:
    def __init__(self, a):
        self.druzyny = a
    def podajTopDruzyne(self, n):
        for i in range(n):
            print("Top " + str(i + 1) + ": " + self.druzyny[i].nazwa + " Punkty: " + str(self.druzyny[i].punkty))


team1 = Druzyna(100, "Pogoń Książ")
team2 = Druzyna(50, "Pogoń Chrząstowo")
team3 = Druzyna(43, "Pogoń Śrem")
team4 = Druzyna(21, "Pogoń Kiełczynek")
team5 = Druzyna(11, "Amikus Mórka")

timy = [team1, team2, team3, team4, team5]
liga = LigaPodworkowa(timy)
ile = int(input("Podaj Top ile chcesz zobaczyć (5 drużyn): "))
liga.podajTopDruzyne(ile)
