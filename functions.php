<?PHP
#global variables, that will be used a lot
class Character {
    #top title block
    public $name = "not defined";
    public $player = "not defined";
    public $virtue = "not defined";
    public $vice = "not defined";
    public $clan = "not defined";
    public $bloodline = "not defined";
    public $covenant = "not defined";
    public $concept = "not defined";
    public $chronicle = "not defined";
    #Attributes
    public $int = 0;
    public $wit = 0;
    public $res = 0;
    public $str = 0;
    public $dex = 0;
    public $sta = 0;
    public $pre = 0;
    public $man = 0;
    public $com = 0;
    #Skills - Mental
    public $aca = 0;
    public $acaS = "not defined";
    public $cra = 0;
    public $craS = "not defined";
    public $comp = 0;
    public $compS = "not defined";
    public $inv = 0;
    public $invS = "not defined";
    public $medi = 0;
    public $mediS = "not defined";
    public $occ = 0;
    public $occS = "not defined";
    public $pol = 0;
    public $polS = "not defined";
    public $sci = 0;
    public $sciS = "not defined";
    #Skills - Physical
}


#Sanitization method, clears out all the stuff that could be used for SQL injections and other trickery
function input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
#check to make sure the table exists, if it does, cool, otherwise make a new table with all the relevant parameters
function checkTable($con, $dBs)
{	
	if(!mysqli_query($con,'select 1 from `user`'))
	{
		$sql="CREATE TABLE if not exists users(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), username CHAR(50) NOT NULL UNIQUE, email CHAR(50), password CHAR(250) NOT NULL, level INT NOT NULL)";
		mysqli_query($con,$sql);
		
		#create a default "storyteller" account.
		$sql2="INSERT INTO architect.users (ID,username,email,password,level) VALUES(1,'storyteller','_','" . passHash("1a2b3c4d5e") . "',1)"; 
		mysqli_query($con,$sql2);
		if(mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error() . mysqli_connect_errno();
		}		
	}
	if(!mysqli_query($con,'select 1 from `architect.characters`'))
	{
            #creates a character table, if you want to add any new traits to a sheet, you have to append them here
            
            #For New WOD Requiem Characters.
            $sql="CREATE TABLE if not exists architect.characters(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), name TINYTEXT NOT NULL, virtue TINYTEXT, vice TINYTEXT, type TINYTEXT, 
                    maingroup TINYTEXT, subgroup TINYTEXT, faction TINYTEXT, chronicle TINYTEXT, concept TINYTEXT, experience INT, experienceSpent INT, 
                    inte TINYINT, wit TINYINT, res TINYINT, str TINYINT, dex TINYINT, sta TINYINT, pre TINYINT, man TINYINT, com TINYINT, 
                    aca TINYINT, cra TINYINT, comp TINYINT, inv TINYINT, med TINYINT, occ TINYINT, pol TINYINT, sci TINYINT,
                    ath TINYINT, bra TINYINT, dri TINYINT, fir TINYINT, lar TINYINT, ste TINYINT, sur TINYINT, wea TINYINT,
                    ani TINYINT, emp TINYINT, exp TINYINT, inti TINYINT, per TINYINT, soc TINYINT, stre TINYINT, sub TINYINT,
                    acaS TINYTEXT, craS TINYTEXT, compS TINYTEXT, invS TINYTEXT, medS TINYTEXT, occS TINYTEXT, polS TINYTEXT, sciS TINYTEXT, 
                    athS TINYTEXT, braS TINYTEXT, driS TINYTEXT, firS TINYTEXT, larS TINYTEXT, steS TINYTEXT, surS TINYTEXT, weaS TINYTEXT, 
                    aniS TINYTEXT, empS TINYTEXT, expS TINYTEXT, intiS TINYTEXT, perS TINYTEXT, socS TINYTEXT, strS TINYTEXT, subS TINYTEXT)";
            


            /* This Section was originally for BNS Vampire
            $sql="CREATE TABLE if not exists architect.characters(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), 
            name CHAR(80) NOT NULL UNIQUE, Player_ID INT, archetype CHAR(20), clan CHAR(30), generation_dots TINYINT, generation TINYINT,
            physical TINYINT, social TINYINT, mental TINYINT,focus SMALLINT, 
            academics TINYINT, academics_spec CHAR(50), animal_ken TINYINT, animal_ken_spec CHAR(50), athletics TINYINT, athletics_spec CHAR(50),awareness TINYINT, awareness_spec CHAR(50), brawl TINYINT, brawl_spec CHAR(50), computer TINYINT, computer_spec CHAR(50), 
            crafts TINYINT, crafts_spec CHAR(50), crafts2 TINYINT, crafts2_spec CHAR(50), crafts3 TINYINT, crafts3_spec CHAR(50), crafts4 TINYINT, crafts4_spec CHAR(50), crafts5 TINYINT, crafts5_spec CHAR(50), 
            dodge TINYINT, dodge_spec CHAR(50), drive TINYINT, drive_spec CHAR(50), empathy TINYINT, empathy_spec CHAR(50), firearms TINYINT, firearms_spec CHAR(50), intimidation TINYINT, intimidation_spec CHAR(50), investigation TINYINT, investigation_spec CHAR(50), 
            leadership TINYINT, leadership_spec CHAR(50), linguistics TINYINT, linguistics_spec CHAR(50), lore TINYINT, lore_spec CHAR(250), medicine TINYINT, medicine_spec CHAR(50), melee TINYINT, melee_spec CHAR(50), occult TINYINT, occult_spec CHAR(50), 
            performance TINYINT, performance_spec CHAR(50), performance2 TINYINT, performance2_spec CHAR(50), performance3 TINYINT, perofmance3_spec CHAR(50), science TINYINT, science_spec CHAR(50), science2 TINYINT, science2_spec CHAR(50), science3 TINYINT, science3_spec CHAR(50), science4 TINYINT, science4_spec CHAR(50), science5 TINYINT, science5_spec CHAR(50), 
            security TINYINT, security_spec CHAR(50), stealth TINYINT, stealth_spec CHAR(50), streetwise TINYINT, streetwise_spec CHAR(50), subterfuge TINYINT, subterfuge_spec CHAR(50), survival TINYINT, survival_spec CHAR(50), custom TINYINT, custom_spec CHAR(50), custom2 TINYINT, custom2_spec CHAR(50), custom3 TINYINT, custom3_spec CHAR(50),
            back1 CHAR(50), back_dots1 TINYINT, back2 CHAR(50), back_dots2 TINYINT, back3 CHAR(50), back_dots3 TINYINT, back4 CHAR(50), back_dots4 TINYINT, back5 CHAR(50), back_dots5 TINYINT, back6 CHAR(50), back_dots6 TINYINT, back7 CHAR(50), back_dots7 TINYINT, back8 CHAR(50), back_dots8 TINYINT, back9 CHAR(50), back_dots9 TINYINT, back10 CHAR(50), back_dots10 TINYINT,
            disc1 CHAR(50), disc_dots1 TINYINT, disc2 CHAR(50), disc_dots2 TINYINT, disc3 CHAR(50), disc_dots3 TINYINT, disc4 CHAR(50), disc_dots4 TINYINT, disc5 CHAR(50), disc_dots5 TINYINT, disc6 CHAR(50), disc_dots6 TINYINT, disc7 CHAR(50), disc_dots7 TINYINT, disc8 CHAR(50), disc_dots8 TINYINT, disc9 CHAR(50), disc_dots9 TINYINT, disc10 CHAR(50), disc_dots10 TINYINT, disc11 CHAR(50), disc_dots11 TINYINT,
            merits TEXT, merit_dots TINYINT, flaws TEXT, flaws_dots TINYINT, background TEXT)";*/

            
            mysqli_query($con,$sql);
	}
	if(!mysqli_query($con,'select 1 from `games`'))
	{
		#creates a games table, to list each game as it occurs
		$sql="CREATE TABLE if not exists architect.games(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), name CHAR(100), date DATE)";
		mysqli_query($con,$sql);
	}
	if(!mysqli_query($con,'select 1 from `downtimes`'))
	{
		#creates a table to store downtimes, associating each downtime to a game and a character.
		$sql="CREATE TABLE if not exists architect.downtimes(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), game_ID INT, character_ID INT, downtime TEXT, response TEXT)";
		mysqli_query($con,$sql);
	}
	if(!mysqli_query($con,'select 1 from `char_games`'))
	{
		#creates a table to associate the many games to many characters, so that you can have multiple games attended by multiple characters, SQL stuff
		$sql="CREATE TABLE if not exists architect.char_games(characters_ID INT, games_ID INT, CONSTRAINT char_games_att PRIMARY KEY(characters_ID, games_ID), CONSTRAINT FK_char FOREIGN KEY (characters_ID) REFERENCES architect.characters (ID), CONSTRAINT FK_game FOREIGN KEY (games_ID) REFERENCES architect.games (ID))";
		mysqli_query($con,$sql);
	}
}

#Adds a new user to the database  TODO: Check if the same user exists and report errors back to the user.
function newUser($con,$email,$password)
{
	
	$sql="INSERT INTO architect.users (username,password,level) VALUES('" . $email . "','" . passHash($password) . "', 4)";
	mysqli_query($con,$sql);
}
#Hashes a password, so it's not stored in plaintext.
function passHash($pass)
{
	$cost = 10;
	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
	$salt = sprintf("$2a$%02d$", $cost) . $salt;
	
	$hash = crypt($pass,$salt);
	return $hash;
}
#Checks a password to see if it matches the stored password hash
function passCheck($con, $pass, $username)
{
	$sqldata =$sqlout="_";
	$sql = "SELECT password FROM architect.user WHERE username='" . $username . "' LIMIT 1";
	$sqlout = mysqli_query($con,$sql);
	
	
	$hash = crypt($pass,$sqlout);
	if ($hash == $sqlout)
	{
		return true;
	}
	else
	{
		return false;
	}

}
#Login method, which should direct right to a list of existing characters, or a game control menu, depending on privilege.
function login($con,$name,$pass)
{
	if(passCheck($con,$pass,$name))
	{
		session_start();
		loadSession($con, $name);
	}
}
#loads the successful login into the session handler with all characters that that player is allowed to handle.
function loadSession($con, $name)
{
	$_SESSION['User']=$name;
	$_SESSION['UserID']=SQLQUERY($con,"SELECT ID FROM architech.players WHERE username='" . $name . "'");
	$_SESSION['characters']=SQLQUERY($con,"SELECT * FROM architect.characters WHERE PLAYER_ID='" . $_SESSION['UserID'] . "'");
}
#a basic 'return all things on $table matching $search conditions' function, not sure if going to use yet, all SQL calls are pretty specific to the function that they're called from.
function SQLQuery($con,$search)
{
	
}

function dotloop ($num)
{

 for($x =0; $x<$num; $x++)
 {
	 echo("●");
 }
 for( $x=0; $x<(5-$num); $x++)
 {
     echo("○");
 }
}

?>