import random
class Gracz:
    def __init__(self, HP, ATK, DEF):
        self.HP = HP
        self.ATK = ATK
        self.DEF = DEF

    def attack(self, enemy):
        chance = random.randint(1,10)
        if chance <= 4:
            enemy.HP = enemy.HP - self.ATK
            print("Pominięto pancerz")
        else:
            enemy.HP = enemy.HP - (self.ATK - self.DEF)
            print("Nie pominięto pancerz")
    
    def heal(self, amount):
        chance = random.randint(1,10)
        if chance == 1:
            self.HP += amount
            print(f"Udało się uleczyć {amount} HP")
        else:
            print(f"Nie udało się uleczyć")


gracz1 = Gracz(100, 20 , 12)
gracz2 = Gracz(90, 22, 13)
hp1 = gracz1.HP * 0.25
hp2 = gracz1.HP * 0.25
turn = 1
run = True
while(run):
    print("HP 1 gracza: " + str(gracz1.HP))
    print("HP 2 gracza: " + str(gracz2.HP))
    if gracz1.HP <= 0 or gracz2.HP <= 0:
        run = False
        if gracz1.HP <= 0:
            print("Koniec wygrał gracz nr 2")
            break
        else:
            print("Koniec wygrał gracz nr 1")
            break
    
    
    if turn == 1:
        ruch = int(input("Wybierz swoją akcję (attack - 1, heal - 2) graczu 1: "))
        if ruch == 1:
            gracz1.attack(gracz2)
            turn = 2
        elif ruch == 2:
            gracz1.heal(hp1)
            turn = 2
        else:
            print("zmarnowałeś ruch")
            turn = 2

    print("HP 1 gracza: " + str(gracz1.HP))
    print("HP 2 gracza: " + str(gracz2.HP))

    if gracz1.HP <= 0 or gracz2.HP <= 0:
        run = False
        if gracz1.HP <= 0:
            print("Koniec wygrał gracz nr 2")
            break
        else:
            print("Koniec wygrał gracz nr 1")
            break
            
    if turn == 2:
        ruch = int(input("Wybierz swoją akcję (attack - 1, heal - 2) graczu 2: "))
        if ruch == 1:
            gracz2.attack(gracz1)
            turn = 1
        elif ruch == 2:
            gracz1.heal(hp2)
            turn = 1
        else:
            print("zmarnowałeś ruch")
            turn = 1

    
    
