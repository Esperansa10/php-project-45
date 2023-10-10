install:
	composer install

brain-games: 
	./bin/brain-games

validate:
	composer validate	

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-calc:
	./bin/brain-calc

brain-even:
	./bin/brain-even

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime