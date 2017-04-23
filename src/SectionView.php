<?php
namespace Kamrava\Spf;

class SectionView {
    private $path;
    private $data;

    public function from($path)
    {
        $this->path = $path;
        return $this;
    }

    public function with($data)
    {
        $this->data = $data;
        return $this;
    }

    public function render()
    {
        $sections = [
            'title' => view($this->path.'.sections._title')->with($this->data)->render(),
            'head'  => view($this->path.'.sections._head' )->with($this->data)->render(),
            'body'  => view($this->path.'.sections._body' )->with($this->data)->render(),
            'foot'  => view($this->path.'.sections._foot' )->with($this->data)->render()
        ];
        $output = $this->addSlashesAndRemoveLines($sections);
        $sections = json_decode(json_encode($output, JSON_FORCE_OBJECT));
        return view($this->path.'.spf_json', ['sections' => $sections]);
    }

    private function addSlashesAndRemoveLines($sections)
    {
        if (is_array($sections))
        {
            foreach($sections as $key => $var)
            {
                $result[$key] = addcslashes($var, '"');
                $result[$key] = str_replace(["\r","\n"],"", $result[$key]);
            }
            return $result;
        }
    }
}
