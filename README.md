base_excel
==========
This provides the PhpSpreadsheet library, formerly phpExcel, from phpOffice. All the library classes are
available in the extension file *Library/phpoffice-phpspreadsheet.phar* which is automatically included
upon activation in the extension manager by composer or autoloader.

Installation
------------
Via composer or the TER.

### Composer
`composer req jambagecom/base-excel`
### TER
https://extensions.typo3.org/extension/base_excel

phar-composer
--------------
Get it from here:
https://github.com/clue/phar-composer

For developers
--------------
In case TYPO3 does not run in composer mode, the library directory can be rebuilt by 
- running `composer run-script extension-create-libs`. 
- See chapter contributors.
 
For contributors
----------------
- To build the TER package, you must delete the file *Libraries/phpoffice-phpspreadsheet.phar*
  and run `composer run-script extension-release` fore generating the archive.
- At the beginning you will get the question: 
    *"No composer.json in current directory, do you want to use the one at /var/www/html/typo3conf/ext/base_excel? [Y,n]?"*. 
-- Here you must answer with **N**. 
- Then everything will be downloaded and the resulting file 
*Library/phpoffice-phpspreadsheet.phar* will be generated.
