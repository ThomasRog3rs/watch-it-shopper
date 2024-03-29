<?php
  class Post{
    private $db;

    public function __construct(){
      $this->db = new Database();
    }

    public function getPosts(){
      $this->db->query('SELECT *,
                        posts.id as postId,
                        users.id as userId,
                        posts.created_at as postCreated,
                        users.created_at as userCreated  
                        FROM posts
                        INNER JOIN users
                        ON posts.user_id = users.id
                        ORDER BY postCreated DESC
                        ');
      $results = $this->db->resultSet();

      return $results;
    }

    public function addPost($data){
      $this->db->query('INSERT INTO posts (title, user_id, body, price) VALUES(:title, :user_id, :body, :price)');
      //Bind Values
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':price', $data['price']);

      //Execute
      if($this->db->execute()){
        return true;
      }else{
        return false;
      }
    }

    public function editPost($data){
      $this->db->query('UPDATE posts SET title = :title, body = :body, price = :price WHERE id = :post_id');
      //Bind Values
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':post_id', $data['post_id']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':price', $data['price']);

      //Execute
      if($this->db->execute()){
        return true;
      }else{
        return false;
      }
    }

    public function getPostById($id){
      $this->db->query('SELECT * FROM posts WHERE id = :id');
      //Bind values
      $this->db->bind(':id', $id);
      //Get Row
      $row = $this->db->single();
      //Return Row
      return $row;
    }

    public function getUserById($id){
      $this->db->query('SELECT * FROM users WHERE id = :id');
      //Bind values
      $this->db->bind(':id', $id);
      //Get Row
      $row = $this->db->single();
      //Return Row
      return $row;
    }

    public function deletePost($id){
      $this->db->query('DELETE FROM posts WHERE id = :post_id');
      //Bind Values
      $this->db->bind(':post_id', $id);
      //Execute
      if($this->db->execute()){
        return true;
      }else{
        return false;
      }
    }
  }