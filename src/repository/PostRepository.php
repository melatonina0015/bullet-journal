<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Post.php';

class PostRepository extends Repository
{
    public function getPost(string $id): ?Post
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."Posts" WHERE postID = :id
        ');
        $stmt->bindParam(':postID', $id, PDO::PARAM_INT);
        $stmt->execute();

        $post = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($post == false) {
            return null;
        }

        return new Post(
            $post['title'],
            $post['content'],
            $post['image']
        );
    }

    public function addPost(Post $post): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO "Posts" (title, content, author, image)
            VALUES (?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $author = 3;

        $stmt->execute([
            $post->getTitle(),
            $post->getContent() ,
            $author,
            $post->getImage()
        ]);
    }

    public function getPosts(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM "Posts";
        ');
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($posts as $post) {
            $result[] = new Post(
                $post['title'],
                $post['content'],
                $post['image']
            );
        }

        return $result;
    }
}