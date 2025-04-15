<?php
class Page {
    protected $title;

    public function __construct($title = "TechNova") {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function renderHeader() {
        include_once './includes/header.php';
    }

    public function renderFooter() {
        include_once './includes/footer.php';
    }
}
?>
