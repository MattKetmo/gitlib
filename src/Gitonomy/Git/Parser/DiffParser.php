use Gitonomy\Git\Repository;
    protected $repository;

    public function setRepository(Repository $repository)
    {
        $this->repository = $repository;
    }
        if (null === $this->repository) {
            throw new \RuntimeException('Can\'t work without Repository');
        }

            $oldName  = $vars[1];
            $newName  = $vars[2];
            $oldIndex = null;
            $newIndex = null;
            $oldMode  = null;
            $newMode  = null;
                $oldIndex = $this->consumeHash();
                $this->consume('..');
                $newIndex = $this->consumeHash();
            $oldName  = $oldName === '/dev/null' ? null : substr($oldName, 2);
            $newName  = $newName === '/dev/null' ? null : substr($newName, 2);
            $oldIndex = preg_match('/^0+$/', $oldIndex) ? null : $oldIndex;
            $newIndex = preg_match('/^0+$/', $newIndex) ? null : $newIndex;
            $file = new File($this->repository, $oldName, $newName, $oldMode, $newMode, $oldIndex, $newIndex, $isBinary);