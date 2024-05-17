<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240516154819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actores (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE actores_peliculas (actores_id INT NOT NULL, peliculas_id INT NOT NULL, INDEX IDX_43DBEB6B1A175E98 (actores_id), INDEX IDX_43DBEB6B9EDD74B8 (peliculas_id), PRIMARY KEY(actores_id, peliculas_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE actores_series (actores_id INT NOT NULL, series_id INT NOT NULL, INDEX IDX_FE847901A175E98 (actores_id), INDEX IDX_FE847905278319C (series_id), PRIMARY KEY(actores_id, series_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorias (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorias_peliculas (categorias_id INT NOT NULL, peliculas_id INT NOT NULL, INDEX IDX_C7CD596E5792B277 (categorias_id), INDEX IDX_C7CD596E9EDD74B8 (peliculas_id), PRIMARY KEY(categorias_id, peliculas_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorias_series (categorias_id INT NOT NULL, series_id INT NOT NULL, INDEX IDX_6F956E195792B277 (categorias_id), INDEX IDX_6F956E195278319C (series_id), PRIMARY KEY(categorias_id, series_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE episodios (id INT AUTO_INCREMENT NOT NULL, temporada_id INT NOT NULL, sinopsis LONGTEXT NOT NULL, duracion INT NOT NULL, nombre VARCHAR(255) NOT NULL, video VARCHAR(400) NOT NULL, imagen VARCHAR(400) NOT NULL, orden INT NOT NULL, INDEX IDX_C7C10056E1CF8A8 (temporada_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE peliculas (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, sinopsis LONGTEXT NOT NULL, video VARCHAR(400) NOT NULL, duracion INT NOT NULL, anio VARCHAR(4) NOT NULL, director VARCHAR(255) NOT NULL, imagen VARCHAR(400) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, sinopsis LONGTEXT NOT NULL, num_temporadas INT NOT NULL, anio_salida VARCHAR(4) NOT NULL, anio_fin VARCHAR(4) NOT NULL, director VARCHAR(255) NOT NULL, imagen VARCHAR(400) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temporadas (id INT AUTO_INCREMENT NOT NULL, serie_id INT NOT NULL, num_episodios INT NOT NULL, sinopsis LONGTEXT NOT NULL, orden INT NOT NULL, INDEX IDX_AE446BE4D94388BD (serie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE actores_peliculas ADD CONSTRAINT FK_43DBEB6B1A175E98 FOREIGN KEY (actores_id) REFERENCES actores (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE actores_peliculas ADD CONSTRAINT FK_43DBEB6B9EDD74B8 FOREIGN KEY (peliculas_id) REFERENCES peliculas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE actores_series ADD CONSTRAINT FK_FE847901A175E98 FOREIGN KEY (actores_id) REFERENCES actores (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE actores_series ADD CONSTRAINT FK_FE847905278319C FOREIGN KEY (series_id) REFERENCES series (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorias_peliculas ADD CONSTRAINT FK_C7CD596E5792B277 FOREIGN KEY (categorias_id) REFERENCES categorias (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorias_peliculas ADD CONSTRAINT FK_C7CD596E9EDD74B8 FOREIGN KEY (peliculas_id) REFERENCES peliculas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorias_series ADD CONSTRAINT FK_6F956E195792B277 FOREIGN KEY (categorias_id) REFERENCES categorias (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorias_series ADD CONSTRAINT FK_6F956E195278319C FOREIGN KEY (series_id) REFERENCES series (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE episodios ADD CONSTRAINT FK_C7C10056E1CF8A8 FOREIGN KEY (temporada_id) REFERENCES temporadas (id)');
        $this->addSql('ALTER TABLE temporadas ADD CONSTRAINT FK_AE446BE4D94388BD FOREIGN KEY (serie_id) REFERENCES series (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actores_peliculas DROP FOREIGN KEY FK_43DBEB6B1A175E98');
        $this->addSql('ALTER TABLE actores_peliculas DROP FOREIGN KEY FK_43DBEB6B9EDD74B8');
        $this->addSql('ALTER TABLE actores_series DROP FOREIGN KEY FK_FE847901A175E98');
        $this->addSql('ALTER TABLE actores_series DROP FOREIGN KEY FK_FE847905278319C');
        $this->addSql('ALTER TABLE categorias_peliculas DROP FOREIGN KEY FK_C7CD596E5792B277');
        $this->addSql('ALTER TABLE categorias_peliculas DROP FOREIGN KEY FK_C7CD596E9EDD74B8');
        $this->addSql('ALTER TABLE categorias_series DROP FOREIGN KEY FK_6F956E195792B277');
        $this->addSql('ALTER TABLE categorias_series DROP FOREIGN KEY FK_6F956E195278319C');
        $this->addSql('ALTER TABLE episodios DROP FOREIGN KEY FK_C7C10056E1CF8A8');
        $this->addSql('ALTER TABLE temporadas DROP FOREIGN KEY FK_AE446BE4D94388BD');
        $this->addSql('DROP TABLE actores');
        $this->addSql('DROP TABLE actores_peliculas');
        $this->addSql('DROP TABLE actores_series');
        $this->addSql('DROP TABLE categorias');
        $this->addSql('DROP TABLE categorias_peliculas');
        $this->addSql('DROP TABLE categorias_series');
        $this->addSql('DROP TABLE episodios');
        $this->addSql('DROP TABLE peliculas');
        $this->addSql('DROP TABLE series');
        $this->addSql('DROP TABLE temporadas');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
