<?php

// Read the file and its size
echo readfile("l28file.txt"); // including file size
echo "<hr/>";
echo "File size is ==> " . filesize("./l28file.txt");
echo "<hr/>";

// Open the file for reading
$fileopen = fopen("l28file.txt", "r");

if ($fileopen) {
    echo "File Exists";
    echo "<br/>";

    $filesize = filesize("l28file.txt");
    $fileread = fread($fileopen, $filesize);
    fclose($fileopen);

    echo $fileread;
} else {
    echo "File does not exist";
}

echo "<hr/>";

// Create and write to a new file
$fileopen = fopen("l28files.txt", "w");
if ($fileopen) {
    echo "File Exists";
    echo "<br/>";

    fwrite($fileopen, "Hello guys !! I created new file");
    fclose($fileopen);

    $fileopen = fopen("l28files.txt", "r");
    if ($fileopen) {
        $fileread = fread($fileopen, filesize("l28files.txt"));
        fclose($fileopen);

        echo $fileread;
    } else {
        echo "Failed to reopen the file for reading";
    }
} else {
    echo "File does not exist";
}

echo "<hr/>";

// Create a new file with 'x' mode
$fileopen = fopen("l28newfiles.txt", "x");
if ($fileopen) {
    echo "File Exists";
    fclose($fileopen);
} else {
    echo "File doesn't exist or already exists";
}

echo "<hr/>";

// Create or open a file with 'c' mode
$fileopen = fopen('l28yourfiles.txt', 'c');
if ($fileopen) {
    echo "File Exists";
    echo "<br/>";

    fwrite($fileopen, "Hello guys !! I created new file");
    fclose($fileopen);

    $fileopen = fopen("l28yourfiles.txt", "c+");
    if ($fileopen) {
        $fileread = fread($fileopen, filesize("l28yourfiles.txt"));
        fclose($fileopen);

        echo $fileread;
    } else {
        echo "Failed to reopen the file for reading";
    }
} else {
    echo "File does not exist";
}

echo "<hr/>";

// Write to a file and not overwrite the content
$fileopen = fopen('l28ourfiles.txt', 'w');
if ($fileopen) {
    echo "File Exists";
    echo "<br/>";

    $message = "Welcome to our class.\n";
    fwrite($fileopen, $message);
    $message = "Thank you for using PHP file system.";
    fwrite($fileopen, $message);
    fclose($fileopen);

    $fileopen = fopen("l28ourfiles.txt", "r");
    if ($fileopen) {
        $fileread = fread($fileopen, filesize("l28ourfiles.txt"));
        fclose($fileopen);

        echo $fileread;
    } else {
        echo "Failed to reopen the file for reading";
    }
} else {
    echo "File does not exist";
}

echo "<hr/>";

// Append to a file
$fileopen = fopen('l28theirfiles.txt', 'a');
if ($fileopen) {
    echo "File Exists";
    echo "<br/>";

    $message = "Welcome to our class.\n";
    fwrite($fileopen, $message);
    $message = "Thank you for using PHP file system.";
    fwrite($fileopen, $message);
    fclose($fileopen);

    $fileopen = fopen("l28theirfiles.txt", "r");
    if ($fileopen) {
        $fileread = fread($fileopen, filesize("l28theirfiles.txt"));
        fclose($fileopen);

        echo $fileread;
    } else {
        echo "Failed to reopen the file for reading";
    }
} else {
    echo "File does not exist";
}

echo "<hr/>";

// Other useful file functions
echo file_get_contents("l28file.txt");
echo "<hr/>";

$existingfile = "l28file.txt";
$namefile = "l28softfile.txt";

$message = file_get_contents($existingfile);
$message .= "\n Thanks for using PHP file system.\n";
file_put_contents($namefile, $message);

echo "<hr/>";
$existingfile = "l28file.txt";
$namefile = "l28headfile.txt";

if (file_exists($existingfile)) {
    echo "File exists";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using PHP file system.\n";
    file_put_contents($namefile, $message) or die("Unable to open file");
} else {
    echo "File not found";
}

echo "<hr/>";

$existingfile = "l28file.txt";
$namefile = "l28mainfile.txt";

if (is_file($existingfile)) {
    echo "File exists";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using PHP file system.\n";
    file_put_contents($namefile, $message) or die("Unable to open file");
} else {
    echo "File not found";
}

echo "<hr/>";

// Copy file
$existingfile = "l28file.txt";
copy($existingfile, "l28subfile.txt");
echo file_get_contents("l28subfile.txt");
echo "<hr/>";

// Rename file
$existingfile = "l28subfile.txt";
rename($existingfile, "l28webfile.txt");
echo "<hr/>";

// Delete file
$existingfile = "l28webfile.txt";
if (file_exists($existingfile)) {
    unlink($existingfile);
    echo "File deleted successfully";
} else {
    echo "File not found";
}

echo "<hr/>";

// Show all .txt files
echo "<pre>" . print_r(glob("*.txt"), true) . "</pre>";
echo "<hr/>";

// Show all files
echo "<pre>" . print_r(glob("*.*"), true) . "</pre>";
echo "<hr/>";
?>
