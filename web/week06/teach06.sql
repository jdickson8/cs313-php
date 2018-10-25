CREATE table scriptures (
	id serial PRIMARY KEY,
	book varchar(80),
	chapter integer,
	verse integer,
	content text
);

CREATE TABLE topic (
	id serial PRIMARY KEY,
	name varchar(80)
);

CREATE TABLE scripture_topic (
	scriptures_id integer REFERENCES scriptures (id),
	topic_id integer REFERENCES topic (id)
)

INSERT INTO scriptures (book, chapter, verse, content) values ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.');

INSERT INTO scriptures (book, chapter, verse, content) values ('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');

INSERT INTO scriptures (book, chapter, verse, content) values ('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');

INSERT INTO scriptures (book, chapter, verse, content) values ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');