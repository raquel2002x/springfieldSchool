<h1>Project: "Notas Escolares"</h1>

<h2>1. Project description:</h2>
<ul>
<li>The client is a school that has asked us for an app to manage its students data and scores.</li>
<li>Students will be able to view their exams marks.</li>
<li>Their teacher will be able to add, modify and delete both students and their marks.</li>
</ul>

<h2>2. User stories:</h2>

<h3>2.1 User Story (User):</h3>
<ul>
<li>See the page.</li>
<li>They can see their marks.</li>
<li>They can see their information.</li>
</ul>

<h3>2.2 User Story (Administrator):</h3>
<ul>
<li>View the app as admin.</li>
<li>Access their student information and marks.</li>
<li>Add new students and marks.</li>
<li>Delete students and marks.</li>
<li>Edit students and marks.</li>
</ul>

<h2>3. Our team</h2>

<ul>
<li>Carmen Cruces https://github.com/CarmenCruces</li>  
<li>Alba Rus (Product Owner) https://github.com/Albaric0que</li> 
<li>Raquel Palomo https://github.com/raquel2002x</li> 
<li>Camila Ruíz https://github.com/camilaruiz17</li> 
<li>Himo Jaramillo  https://github.com/Himorell</li>
<li>Paloma Ruíz (Scrum Master) https://github.com/birdsinyourgarden</li>
</ul>


<h2>4. Project Demo (Preview)</h2>
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:400px; height:250px; margin:12px" src="https://user-images.githubusercontent.com/116546588/213402788-585bfa53-121f-42ac-8058-15d968106c40.gif" alt="Preliminary project demo"/>
</div>


<h2>5. Initial Sketch</h2>
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:400px; margin:12px" src="" alt="initialSketch"/>
</div>

<h2>6. Atomic Design</h2> 
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:250px; height:400px; margin:12px" src="" alt="Atomic Design"/>
</div>

<h2>7. Final Design</h2> 
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:500px; margin:12px" src="" alt="Final Design "/>
</div>

<h2>8. Stacks</h2>
<ul>
<li>HTML5</li>
<li>CSS3</li>
<li>JavaScript</li>
<li>PHP</li>
<li>Laravel</li>
<li>Boostrap</li>
</ul>

<h2>9. Required:</h2>
<li>Composer & Laravel Installed</li>
<li>XAMPP/LAMPP Installed</li>
<li>NPM Installed</li>
<li>MySQL</li>
<li>PHP</li>
<li>PHP Artisan Serve</li>


<h3>To install Project</h3>
<li>Open your IDE and your terminal</li>
<li>Run <b>git clone</b> https://github.com/Himorell/springfieldElementarySchool.git</li>
<li>Write in the IDE terminal the command: <b>composer install </b>or <b>composer update</b> (If you have previously installed composer), and press intro.</li>
<li>Write in the IDE terminal the command: <b>composer create-project --prefer-dist</b> and press intro.</li>
<li>An <b>.env</b> file (in the form of a little wheel) will be downloaded. Go into it and rename the line <b>DB_DATABASE</b>. Change the name generated by default and write <b>tech-event.</b></li>
<li>Open XAMPP or LAMPP.</li>
<li>Login to <b>phpMyAdmin</b> and create a new table named <b>tech-event.</b></li>
<li>Type in the IDE terminal: <b>php artisan migrate:fresh --seed</b> and press intro.</li>
<li>Type in the IDE terminal: <b>composer require laravel/ui</b> and press intro.</li>
<li>Type in the IDE terminal: <b>php artisan ui bootstrap --auth</b> and press intro.</li>
<li>Type in the IDE terminal: <b>npm install</b> and press intro.</li>
<li>Type in the IDE terminal: <b>npm run dev</b> and press intro. Then open another terminal in the IDE without closing the previous one</li>
<li>Type in the IDE terminal: <b>php artisan migrate</b> and press intro</li>
<li>Type in the IDE terminal: <b>php artisan serve</b> and press intro.</li>

<h3>Warning & Testing</h3>
<ol>
<li><b>Important</b>: If we then need to run more commands in the IDE, we'll open a third terminal without closing the previous two.</li>
<li><b>Test</b>: Run <b>php artisan test</b> & <b>vendor/bin/phpunit</b> in your terminal.</li>
</ol>

<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:500px; margin:12px" src="" alt="finalTest"/>
</div>

<h2>10. Methodology:</h2>
<ul>
<li>Mob programming.</li>
<li>Pair programming.</li>
<li>Agile with SCRUM</li>
</ul>


<h2>11. Next Steps</h2>
<ul>
<li>Continue to implement the CRUD.</li>
<li>Continue implementing the design.</li>
<li>Continue implementing functionalities.</li>
</ul>
