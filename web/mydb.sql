CREATE TABLE game (
  id serial NOT NULL,
  player1_id serial NOT NULL,
  player2_id serial NOT NULL,
  player3_id serial NOT NULL,
  player4_id serial NOT NULL,
  rounds int NOT NULL,
  score int NOT NULL,
  win bool NOT NULL,
  average_bid float NOT NULL,
  bid_sucess_rate float NOT NULL
);

CREATE TABLE round (
  id serial NOT NULL,
  game_id serial NOT NULL,
  round_number int NOT NULL,
  player1_bid int NOT NULL,
  player2_bid int NOT NULL,
  player3_bid int NOT NULL,
  player4_bid int NOT NULL,
  team1_tricks int NOT NULL,
  team2_tricks int NOT NULL,
  team1_gotBid bool NOT NULL,
  team2_gotBid bool NOT NULL,
  points int NOT NULL
);

CREATE TABLE user (
  id serial NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  display_name varchar(100) NOT NULL,
  average_bid float NOT NULL,
  bid_sucess_rate float NOT NULL
);

ALTER TABLE game
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY id (id),
  ADD UNIQUE KEY player_id (player1_id),
  ADD UNIQUE KEY player2_id (player2_id,player3_id,player4_id),
  ADD KEY id_2 (id),
  ADD KEY player2_id_2 (player2_id,player3_id,player4_id),
  ADD KEY player3_id (player3_id),
  ADD KEY player4_id (player4_id);

ALTER TABLE round
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY id (id),
  ADD UNIQUE KEY game_id (game_id),
  ADD KEY Id_2 (id);

ALTER TABLE user
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY id (id),
  ADD UNIQUE KEY username (username),
  ADD KEY id_2 (id);


ALTER TABLE game
  MODIFY id serial NOT NULL AUTO_INCREMENT;
ALTER TABLE round
  MODIFY id serial NOT NULL AUTO_INCREMENT;
ALTER TABLE user
  MODIFY id serial NOT NULL AUTO_INCREMENT;

ALTER TABLE game
  ADD CONSTRAINT game_ibfk_1 FOREIGN KEY (player1_id) REFERENCES user (id),
  ADD CONSTRAINT game_ibfk_2 FOREIGN KEY (player2_id) REFERENCES user (id),
  ADD CONSTRAINT game_ibfk_3 FOREIGN KEY (player3_id) REFERENCES user (id),
  ADD CONSTRAINT game_ibfk_4 FOREIGN KEY (player4_id) REFERENCES user (id);

ALTER TABLE round
  ADD CONSTRAINT round_ibfk_1 FOREIGN KEY (game_id) REFERENCES game (id);
