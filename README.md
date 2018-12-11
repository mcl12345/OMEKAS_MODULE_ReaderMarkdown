**Ce module est un lecteur de fichier Markdown sur Omeka-s** <br />

Le Markdown est un langage de balisage léger créé en 2004 par John Gruber avec Aaron Swartz. Son but est d'offrir une syntaxe facile à lire et à écrire. Un document balisé par Markdown peut être lu en l'état sans donner l’impression d'avoir été balisé ou formaté par des instructions particulières. 

Ce module écrit dans OmekaS le fichier Markdown lorsqu'il apparaît comme un lien dans les items / médias ou sur un site dans OmekaS

### Installation

<br />
<b>1èreétape :</b> Il faut auparavant installer le module Sideload https://omeka.org/s/modules/FileSideload/ , copier / coller le fichier dézipper de Sideload dans le fichier "modules" dans le dossier d'omeka-s. Puis aller dans l'interface Web d'OmekaS et aller dans "Modules" et cliquer sur "installer".<br /><br />
<b>2ème étape :</b> Aller dans l'interface Web d'OmekaS, aller dans les items, cliquer sur "Add new item", Cliquer sur l'onglet "Media", cliquer sur 
"SideLoad" en bas à droite pour uploader un fichier Markdown, cliquer sur la liste "File", choisir le fichier "README.md", cliquer sur "Add". Si il n'y a pas de fichier Markdown ( README ) , copier / coller un fichier Markdown de n'importe quel projet Github dans le fichier racine d'OmekaS et ressayer de l'ouvrir avec SideLoad.
<br /><br />
<b>3ème étape :</b> Si il y a en vert le label "Item successfully created." l'upload du README.md a bien été effectué.<br /><br />
<b>4ème étape :</b> Aller dans "Items", choisir le fichier Markdown importé et l'ouvrir dans la colonne à droite et normalement le fichier devrait dévoiler son contenu.
<br /><br />


![](https://i.ibb.co/VjyrV6z/omekas-module-markdown.png)

MIT License

Copyright (c) [2018] [Morvan CALMEL]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
