<?php

class Book {
  public $title;
  public $author;

  public function __construct($title, $author) {
    $this->title = $title;
    $this->author = $author;
    echo "本のタイトルと著者を受け取りました\n";
  }

  public function showInfo() {
    echo "タイトル:{$this->title}、著者:{$this->author}の本を作成しました\n";
  }
}

$book1 = new Book("PHP入門", "山田太郎");
$book2 = new Book("冴島伝記", "冴島大河");

$book1->showInfo();
$book2->showInfo();

?>

<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
      echo "ユーザーの名前とメールを受け取りました\n";
    }

    public function showProfile() {
      echo "ユーザー名:{$this->name}、メール:{$this->email}\n";
    }
}

$user1 = new User("冴島大河", "saejimataiga.email");
$user2 = new User("真島吾郎", "majimagoro.email");

$user1->showProfile();
$user2->showProfile();

?>