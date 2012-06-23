<?php defined('_JEXEC') or die ;

class plgContentPDFJS extends JPlugin
{
    public function onContentPrepare($context, &$article, &$params, $page = 0)
    {
        // Simple performance check to determine whether bot should process further
        if (strpos($article->text, 'pdfjs') === false && strpos($article->text, 'pdfjs') === false) {
            return true;
        }
        
        // TODO Load the scripts and libraries needed to display the reader

        $regex = '/{pdfjs\s+(.*?)}/i';
        preg_match_all($regex, $article->text, $matches, PREG_SET_ORDER);

        if ($matches) {
            foreach ($matches as $match) {
                
                // TODO Generate proper html markup for displaying the PDF viewer
                $output = "<h1>Hello</h1>";
                
                $article->text = preg_replace("|$match[0]|", addcslashes($output, '\\$'), $article->text, 1);
            }
        }
    }
}
