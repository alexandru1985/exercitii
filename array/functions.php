<html>
   <body>
    <p>
1. Care este experienta ta  in lucrul cu frameworks PHP si JavaScript? 
    Am realizat un site de prezentare  in CodeIgniter Framework. Contine elemente cum ar fi: structura MVC, constructie URL, validare formular (library 'form_validation'), utilizare helper etc.
In cadrul proiectelor pe care le-am realizat am folosit jQuery. Am utilizat efecte cum ar fi: FadeIn, Toggle, Hide. De asemenea, pentru a ramane hover-ul activ in momentul in care se muta cursorul de pe link am utilizat cod jQuery.
2. Ce experienta ai in dezvoltarea back-end?
    Am realizat 3 site-uri (plus cel in CodeIgniter Framework). Toate site-urile au caracter demonstrativ si sunt realizate procedural.
        a) Un site ce are ca tema un hotel. Am utilizat elemente cum ar fi: slider (realizat cu Javascript), am utilizat AJAX, formulare prin care se trimit informatii in baza de date, modificare date intr-un tabel (principiul CRUD), validare de formular cu PHP (REGEX, FILTER_VALIDATE_EMAIL).
        b) O aplicatie prin care se pot calcula salariile unor angajati. Structura acestei aplicatii este reprezentata de aproximativ 20 de comenzi mysqli_query(). Majoritatea comenzilor contin join-uri. De asemenea, am folosit functii cum ar fi: Sum(), Count(). Tot in cadrul acestui proiect am realizat o validare de formular cu Javascript si un motor de cautare folosind tag-uri select.
        c) Un magazin online (bookstore). Structura acestui proiect este reprezentata de utilizarea comenzilor SQL. Va voi da un exemplu: introducere date in zona admistrativa a magazinului ( spre exemplu denumirea sau descrierea unei carti) si afisarea acestora in zona propriu-zisa a magazinului prin utilizarea functiilor Select, while si mysqli_fetch_assoc(). Tot in cadrul acestui proiect am realizat un login & register system la care am lucrat cu sesiuni si am hash-uit parola cu functia md5().
3. Ce experienta ai in integrarea de APIs third-party via servicii web (SOAP, REST)?
Am cunostinte de APIs, cum ar fi Google Maps sau Facebook PHP SDK.
De asemenea, am cunostinte de:
OOP - metodele magice, mostenirea, interfetele, clasele abstracte, constantele, atributele si metodele statice;
Design patterns - modelele singleton, registry, strategy, factory;
SQL - indecsi, tranzactii, triggeri;
Algoritmi - quick sort, bubble sort;

row_locking - cand mai multi useri lucreaza pe o baza de date daca unul face o operatie pe un rand se blocheaza doar acel rand astfel incat ceilalti nu au acces la el
table_locking - blocheaza tot tabelul. doi useri nu pot lucra in acelasi tabel in acelasi timp.

Diferenta dintre aceste 2 conditii este urmatoarea: WHERE cauta in tabelele de la care se pleaca, iar  HAVING cauta in rezultat.
Diferenta intre INNER JOIN si LEFT JOIN, intre MyISAM si InnoDB
Diferenta intre require ( intrerupe executia scriptului) si include.
Diferenta intre == si ===, == verifica doar daca valorile din stanga si dreapta sunt egale, iar === verifica daca valorile din stanga si din dreapta sunt egale si daca variabilele sunt de acelasi tip boolean, int 
Referintele PHP permit unor variabile cu denumiri diferite sa corespunda unui acelasi continut.
Daca o clasa contine o metoda statica nu mai este necesara instantierea si folosirea operatorului new.
1. Si interfata impune claselor care o implementeza mostenirea tutoror metodelor definite in interfata. Dar:
 - intr-o clasa abstracta poti sa scrii cod, si intr-o interfata nu;
- si cel mai important, poti implementa mai multe interfete insa poti sa extinzi o singura clasa.
Tranzactiile se folosesc atunci cand se fac mai multe operatii de insert into, select, update, delete. Se fac operatiile una dupa alta.
SQL tutoriale
$_SESSION
Google api, marker
cURL - trimitere date, download files si upload picture
Paginare in CodeIgniter
array_key()- returneaza cheile unui array asociativ
trigger = declansator
view; se fac schimbari de fiecare data in mod automat
ORM Data Mapper, clasa Active Record CodeIgniter,  one to one, one to many, many to many
Rewrite Rule de la pagina php la pagina html; redirect pagina 301
preg_match()
func_num_args() determina numarul argumentelor
func_get_arg() intoarce un argument din lista
array_merge() uneste elementele a doua matrici
git checkout -b
traducere prin variabila cu functia lang()
slow query
mysqli_insert_id()
serialize()
array_reverse() inverseaza elementele unui array, iar daca este setat ca true cheile numerice raman aceleasi; cheile non-numerice sunt pastrate intotdeauna
join('-',$array) transforma elementele unui array intr-un string; '-' reprezinta separatorul pentru elemente
magic constants
ckeditor
show_404()
instanceof  verifica daca obiectul instantiat apartine clasei
breadcrumbs 
CTRL+F cauta intr-un fisier
git init
git add .
git commit -m""
git checkout -b"", creaza un nou branch si se muta pe el
git merge denumire_branch asigura lucrul pe noul branch
git status
git branch -d denumire_branch se efectueaza delete

DELIMITER //
 CREATE PROCEDURE GetAllProducts()
   BEGIN
   SELECT *  FROM products;
   END //
 DELIMITER ;
CALL GetAllProducts(); o procedura poate fi apelata din orice tabela a bazei de date
SHOW procedure STATUS

delimiter //
CREATE TRIGGER upd_check BEFORE UPDATE ON account
 FOR EACH ROW
     BEGIN
         IF NEW.amount < 0 THEN
             SET NEW.amount = 0;
             ELSEIF NEW.amount > 100 THEN
        SET NEW.amount = 100;
        END IF;
    END;//
 delimiter ;


CREATE VIEW top_price AS
SELECT * FROM `autori` ORDER BY PRET DESC LIMIT 10
        
        
    </p>
   <body>
</html>