Accordions
------------

Simple Accordion done in JavaScript and PHP.

### Usage

        $ob = new accordion('toggler','item');    

        $ob->addItem('Christian Heilmann','<img src="http://farm4.static.flickr.com/3172/3041842192_5b51468648.jpg"><p>I started this blog as I was tired of collecting lots and lots of bookmarks (this was before del.icio.us so it basically meant zipping up the bookmarks.html file of my Netscape install and carry that around with me) of solutions to problems I encountered when developing web sites. Furthermore I wanted to try out my solutions on an audience without having to follow massive email threads on various mailing lists.

        Over the years it grew and so did I, so now I am not an “HTML Developer” any more but can call myself an IDE - International Developer Evangelist – working for the Yahoo Developer Network in the lovely town of London, England.</p>');

        $ob->addItem('Dustin Diaz','<img src="http://farm3.static.flickr.com/2427/4056767705_b4f8261280_m.jpg"><p>As a web developer, you\'ll already know that JavaScript is a powerful language, allowing you to add an impressive array of dynamic functionality to otherwise static web sites. But there is more power waiting to be unlocked--JavaScript is capable of full object-oriented capabilities, and by applying OOP principles, best practices, and design patterns to your code, you can make it more powerful, more efficient, and easier to work with alone or as part of a team</p>');

        $ob->addItem('Nicholas C. Zakas','<img src="https://yuiblog.com/blog-archive/assets/zakas-f2esummit.jpg" /><p>Nicholas C. Zakas is a web software engineer who specializes in user interface design and implementation for web applications using JavaScript, Dynamic HTML, CSS, XML, and XSLT. He is currently principal front end engineer for the Yahoo! homepage and is a contributor to the Yahoo! User Interface (YUI) library, having written the Cookie Utility, Profiler, and YUI Test.

        Nicholas is the author of Professional JavaScript for Web Developers and a co-author on Professional Ajax, and has contributed to other books. He has also written several online articles for WebReference, Sitepoint, and the YUI Blog.</p>');

        $ob->addItem('Rasmus Lerdorf','<img src="http://www.inp-software.com/sites/default/files/styles/page_720x300/public/20131015222342-DSC_0619.JPG" /><p>Rasmus Lerdorf (born November 22, 1968 in Qeqertarsuaq, Greenland) is a Danish-Greenlandic programmer and is most notable as the creator of the PHP programming language. He authored the first two versions. Lerdorf also participated in the development of later versions of PHP led by a group of developers including Jim Winstead (who later created blo.gs), Stig Bakken, Shane Caraveo, Andi Gutmans and Zeev Suraski. Andi and Zeev later founded Zend Technologies.

        He graduated from King City Secondary School in 1988, and in 1993 he graduated from the University of Waterloo with a Bachelor of Applied Science in Systems Design Engineering. From September 2002 to November 6th 2009, he had been employed by Yahoo! Inc. as an Infrastructure Architecture Engineer.</p>');

        $ob->output();        

        echo'<script type="text/javascript">'.$ob->output_js().'</script>';

        $css = ' .toggler{border: 1px solid #ccc;margin: 1px}';
             
        echo$ob->addStyle($css);
