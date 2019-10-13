public function getFileContent(string $path)
{
    return file_get_contents($path);
}

new \Twig_SimpleFunction('rawcontent', [$this, 'getFileContent'])
