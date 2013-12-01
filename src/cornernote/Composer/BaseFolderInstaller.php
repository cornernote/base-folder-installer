<?php

namespace cornernote\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class BaseFolderInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return basename($package->getPrettyName());
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return (bool)("base-folder" === $packageType);
    }
}
