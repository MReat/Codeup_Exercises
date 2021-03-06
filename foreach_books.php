<?php 

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
echo "Books and their properties: " . PHP_EOL . PHP_EOL;
foreach ($books as $title => $bookDetails) {
	echo PHP_EOL;
	echo "$title" . PHP_EOL;
	foreach ($bookDetails as $detail => $value) {
		echo "{$detail} is $value" . PHP_EOL;
		}
}
echo PHP_EOL;
echo PHP_EOL;

echo "Books Published after 1950: " . PHP_EOL. PHP_EOL;
foreach ($books as $title => $bookDetails) {
	foreach ($bookDetails as $detail => $value) {
		if ($value >= 1950) {
			echo "{$title} was published after 1950" . PHP_EOL;
		}
	}
}
?>