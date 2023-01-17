use airvibes ;

INSERT INTO Conseiller VALUES(1,'Debian','Maria','maria@airvibes.com','azerty');
INSERT INTO Conseiller VALUES(2,'Cyrus','Haley','haley@airvibes.com','azerty');

INSERT INTO Partenaire VALUES(1,'AirPlane','Compagnie qui propose des séjour en mer');
INSERT INTO Partenaire VALUES(2,'AirMount','Compagnie qui propose des séjour en montagne');

INSERT INTO Visiteur VALUES(1,'Simpson','Homer',30,TRUE,'742 avenue evergreen terasse','978900','homer@gmail.com','azerty');
INSERT INTO Visiteur VALUES(2,'Woman','Paris',24,FALSE,'5 allé des pommiers','23456','paris@gmail.com','azerty');

INSERT INTO Voyage VALUES(1,'Martinique','1 semaine',300);
INSERT INTO Voyage VALUES(2,'Everest','4 jour',120);

INSERT INTO Article  VALUES(1,'Martinique','Découvre lile avec de beaux paysage ','2022-10-25');
INSERT INTO Article  VALUES(2,'Dubai ','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at dapibus nunc, non ornare enim. Morbi faucibus, nisl vitae imperdiet accumsan, diam augue finibus dui, sed maximus sapien enim eu nisl. Nam enim nunc, venenatis ac varius sit amet, euismod nec nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nibh arcu, ullamcorper quis nisi a, lacinia luctus','2022-10-25');
INSERT INTO Article  VALUES(3,'Londres ','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at dapibus nunc, non ornare enim. Morbi faucibus, nisl vitae imperdiet accumsan, diam augue finibus dui, sed maximus sapien enim eu nisl. Nam enim nunc, venenatis ac varius sit amet, euismod nec nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nibh arcu, ullamcorper quis nisi a, lacinia luctus','2022-10-25');

INSERT INTO conseille VALUES(1,2);
INSERT INTO conseille VALUES(2,1);


INSERT INTO demander VALUES (1,2,TRUE,'ceci est un test');
INSERT INTO demander VALUES(2,1,FALSE,'rien');

INSERT INTO payer VALUES(1,2);
INSERT INTO payer VALUES(2,1);

INSERT INTO proposer VALUES(1,1);
INSERT INTO proposer VALUES(2,2);


INSERT INTO commenter VALUES(1,1,'Très bonne article');

INSERT INTO ecrire VALUES(1,1);

