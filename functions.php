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
    public $experience = 0;
    public $experienceS = 0;
    
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
    public $acaS = "";
    public $cra = 0;
    public $craS = "";
    public $comp = 0;
    public $compS = "";
    public $inv = 0;
    public $invS = "";
    public $medi = 0;
    public $mediS = "";
    public $occ = 0;
    public $occS = "";
    public $pol = 0;
    public $polS = "";
    public $sci = 0;
    public $sciS = "";
    #Skills - Physical
    public $ath = 0;
    public $athS = "";
    public $bra = 0;
    public $braS = "";
    public $dri = 0;
    public $driS = "";
    public $fir = 0;
    public $firS = "";
    public $lar = 0;
    public $larS = "";
    public $ste = 0;
    public $steS = "";
    public $sur = 0;
    public $surS = "";
    public $wea = 0;
    public $weaS = "";
    #Skills = Mental
    public $ani = 0;
    public $aniS = "";
    public $emp = 0;
    public $empS = "";
    public $exp = 0;
    public $expS = "";
    public $inti = 0;
    public $intiS = "";
    public $per = 0;
    public $perS = "";
    public $soc = 0;
    public $socS = "";
    public $stw = 0;
    public $stwS = "";
    public $sub = 0;
    public $subS = "";
    
    public function getName() {
        return $this->name;
    }

    public function getPlayer() {
        return $this->player;
    }

    public function getVirtue() {
        return $this->virtue;
    }

    public function getVice() {
        return $this->vice;
    }

    public function getClan() {
        return $this->clan;
    }

    public function getBloodline() {
        return $this->bloodline;
    }

    public function getCovenant() {
        return $this->covenant;
    }

    public function getConcept() {
        return $this->concept;
    }

    public function getChronicle() {
        return $this->chronicle;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function getExperienceS() {
        return $this->experienceS;
    }

    public function getInt() {
        return $this->int;
    }

    public function getWit() {
        return $this->wit;
    }

    public function getRes() {
        return $this->res;
    }

    public function getStr() {
        return $this->str;
    }

    public function getDex() {
        return $this->dex;
    }

    public function getSta() {
        return $this->sta;
    }

    public function getPre() {
        return $this->pre;
    }

    public function getMan() {
        return $this->man;
    }

    public function getCom() {
        return $this->com;
    }

    public function getAca() {
        return $this->aca;
    }

    public function getAcaS() {
        return $this->acaS;
    }

    public function getCra() {
        return $this->cra;
    }

    public function getCraS() {
        return $this->craS;
    }

    public function getComp() {
        return $this->comp;
    }

    public function getCompS() {
        return $this->compS;
    }

    public function getInv() {
        return $this->inv;
    }

    public function getInvS() {
        return $this->invS;
    }

    public function getMedi() {
        return $this->medi;
    }

    public function getMediS() {
        return $this->mediS;
    }

    public function getOcc() {
        return $this->occ;
    }

    public function getOccS() {
        return $this->occS;
    }

    public function getPol() {
        return $this->pol;
    }

    public function getPolS() {
        return $this->polS;
    }

    public function getSci() {
        return $this->sci;
    }

    public function getSciS() {
        return $this->sciS;
    }

    public function getAth() {
        return $this->ath;
    }

    public function getAthS() {
        return $this->athS;
    }

    public function getBra() {
        return $this->bra;
    }

    public function getBraS() {
        return $this->braS;
    }

    public function getDri() {
        return $this->dri;
    }

    public function getDriS() {
        return $this->driS;
    }

    public function getFir() {
        return $this->fir;
    }

    public function getFirS() {
        return $this->firS;
    }

    public function getLar() {
        return $this->lar;
    }

    public function getLarS() {
        return $this->larS;
    }

    public function getSte() {
        return $this->ste;
    }

    public function getSteS() {
        return $this->steS;
    }

    public function getSur() {
        return $this->sur;
    }

    public function getSurS() {
        return $this->surS;
    }

    public function getWea() {
        return $this->wea;
    }

    public function getWeaS() {
        return $this->weaS;
    }

    public function getAni() {
        return $this->ani;
    }

    public function getAniS() {
        return $this->aniS;
    }

    public function getEmp() {
        return $this->emp;
    }

    public function getEmpS() {
        return $this->empS;
    }

    public function getExp() {
        return $this->exp;
    }

    public function getExpS() {
        return $this->expS;
    }

    public function getInti() {
        return $this->inti;
    }

    public function getIntiS() {
        return $this->intiS;
    }

    public function getPer() {
        return $this->per;
    }

    public function getPerS() {
        return $this->perS;
    }

    public function getSoc() {
        return $this->soc;
    }

    public function getSocS() {
        return $this->socS;
    }

    public function getStw() {
        return $this->stw;
    }

    public function getStwS() {
        return $this->stwS;
    }

    public function getSub() {
        return $this->sub;
    }

    public function getSubS() {
        return $this->subS;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPlayer($player) {
        $this->player = $player;
    }

    public function setVirtue($virtue) {
        $this->virtue = $virtue;
    }

    public function setVice($vice) {
        $this->vice = $vice;
    }

    public function setClan($clan) {
        $this->clan = $clan;
    }

    public function setBloodline($bloodline) {
        $this->bloodline = $bloodline;
    }

    public function setCovenant($covenant) {
        $this->covenant = $covenant;
    }

    public function setConcept($concept) {
        $this->concept = $concept;
    }

    public function setChronicle($chronicle) {
        $this->chronicle = $chronicle;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function setExperienceS($experienceS) {
        $this->experienceS = $experienceS;
    }

    public function setInt($int) {
        $this->int = $int;
    }

    public function setWit($wit) {
        $this->wit = $wit;
    }

    public function setRes($res) {
        $this->res = $res;
    }

    public function setStr($str) {
        $this->str = $str;
    }

    public function setDex($dex) {
        $this->dex = $dex;
    }

    public function setSta($sta) {
        $this->sta = $sta;
    }

    public function setPre($pre) {
        $this->pre = $pre;
    }

    public function setMan($man) {
        $this->man = $man;
    }

    public function setCom($com) {
        $this->com = $com;
    }

    public function setAca($aca) {
        $this->aca = $aca;
    }

    public function setAcaS($acaS) {
        $this->acaS = $acaS;
    }

    public function setCra($cra) {
        $this->cra = $cra;
    }

    public function setCraS($craS) {
        $this->craS = $craS;
    }

    public function setComp($comp) {
        $this->comp = $comp;
    }

    public function setCompS($compS) {
        $this->compS = $compS;
    }

    public function setInv($inv) {
        $this->inv = $inv;
    }

    public function setInvS($invS) {
        $this->invS = $invS;
    }

    public function setMedi($medi) {
        $this->medi = $medi;
    }

    public function setMediS($mediS) {
        $this->mediS = $mediS;
    }

    public function setOcc($occ) {
        $this->occ = $occ;
    }

    public function setOccS($occS) {
        $this->occS = $occS;
    }

    public function setPol($pol) {
        $this->pol = $pol;
    }

    public function setPolS($polS) {
        $this->polS = $polS;
    }

    public function setSci($sci) {
        $this->sci = $sci;
    }

    public function setSciS($sciS) {
        $this->sciS = $sciS;
    }

    public function setAth($ath) {
        $this->ath = $ath;
    }

    public function setAthS($athS) {
        $this->athS = $athS;
    }

    public function setBra($bra) {
        $this->bra = $bra;
    }

    public function setBraS($braS) {
        $this->braS = $braS;
    }

    public function setDri($dri) {
        $this->dri = $dri;
    }

    public function setDriS($driS) {
        $this->driS = $driS;
    }

    public function setFir($fir) {
        $this->fir = $fir;
    }

    public function setFirS($firS) {
        $this->firS = $firS;
    }

    public function setLar($lar) {
        $this->lar = $lar;
    }

    public function setLarS($larS) {
        $this->larS = $larS;
    }

    public function setSte($ste) {
        $this->ste = $ste;
    }

    public function setSteS($steS) {
        $this->steS = $steS;
    }

    public function setSur($sur) {
        $this->sur = $sur;
    }

    public function setSurS($surS) {
        $this->surS = $surS;
    }

    public function setWea($wea) {
        $this->wea = $wea;
    }

    public function setWeaS($weaS) {
        $this->weaS = $weaS;
    }

    public function setAni($ani) {
        $this->ani = $ani;
    }

    public function setAniS($aniS) {
        $this->aniS = $aniS;
    }

    public function setEmp($emp) {
        $this->emp = $emp;
    }

    public function setEmpS($empS) {
        $this->empS = $empS;
    }

    public function setExp($exp) {
        $this->exp = $exp;
    }

    public function setExpS($expS) {
        $this->expS = $expS;
    }

    public function setInti($inti) {
        $this->inti = $inti;
    }

    public function setIntiS($intiS) {
        $this->intiS = $intiS;
    }

    public function setPer($per) {
        $this->per = $per;
    }

    public function setPerS($perS) {
        $this->perS = $perS;
    }

    public function setSoc($soc) {
        $this->soc = $soc;
    }

    public function setSocS($socS) {
        $this->socS = $socS;
    }

    public function setStw($stw) {
        $this->stw = $stw;
    }

    public function setStwS($stwS) {
        $this->stwS = $stwS;
    }

    public function setSub($sub) {
        $this->sub = $sub;
    }

    public function setSubS($subS) {
        $this->subS = $subS;
    }


}


#Sanitization method, clears out all the stuff that could be used for SQL injections and other trickery
function input($data) 
{
	return trim(stripslashes(htmlspecialchars($data)));
}
#check to make sure the table exists, if it does, cool, otherwise make a new table with all the relevant parameters
function checkTable($con, $dBs)
{	
	if(!mysqli_query($con,'select 1 from `user`'))
	{
		$sql="CREATE TABLE if not exists users(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), username CHAR(50) NOT NULL UNIQUE, email CHAR(50), password CHAR(250) NOT NULL, level INT NOT NULL)";
		mysqli_query($con,$sql);
		
		#create a default "storyteller" account.
		$sql2="INSERT INTO $dBs.users (ID,username,email,password,level) VALUES(1,'storyteller','_','" . passHash("1a2b3c4d5e") . "',1)"; 
		mysqli_query($con,$sql2);
		if(mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error() . mysqli_connect_errno();
		}		
	}
	if(!mysqli_query($con,'select 1 from `$dBs.characters`'))
	{
            #creates a character table, if you want to add any new traits to a sheet, you have to append them here
            
            #For New WOD Characters.
            $sql="CREATE TABLE if not exists $dBs.characters(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), name TINYTEXT NOT NULL, virtue TINYTEXT, vice TINYTEXT, type TINYTEXT, 
                    maingroup TINYTEXT, subgroup TINYTEXT, faction TINYTEXT, chronicle TINYTEXT, concept TINYTEXT, experience SMALLINT, experienceSpent SMALLINT, 
                    health TINYINT, willpower TINYINT, potency TINYINT, resource TINYINT, morality TINYINT,
                    inte TINYINT, wit TINYINT, res TINYINT, str TINYINT, dex TINYINT, sta TINYINT, pre TINYINT, man TINYINT, com TINYINT, 
                    aca TINYINT, cra TINYINT, comp TINYINT, inv TINYINT, med TINYINT, occ TINYINT, pol TINYINT, sci TINYINT,
                    ath TINYINT, bra TINYINT, dri TINYINT, fir TINYINT, lar TINYINT, ste TINYINT, sur TINYINT, wea TINYINT,
                    ani TINYINT, emp TINYINT, exp TINYINT, inti TINYINT, per TINYINT, soc TINYINT, stre TINYINT, sub TINYINT,
                    acaS TINYTEXT, craS TINYTEXT, compS TINYTEXT, invS TINYTEXT, medS TINYTEXT, occS TINYTEXT, polS TINYTEXT, sciS TINYTEXT, 
                    athS TINYTEXT, braS TINYTEXT, driS TINYTEXT, firS TINYTEXT, larS TINYTEXT, steS TINYTEXT, surS TINYTEXT, weaS TINYTEXT, 
                    aniS TINYTEXT, empS TINYTEXT, expS TINYTEXT, intiS TINYTEXT, perS TINYTEXT, socS TINYTEXT, strS TINYTEXT, subS TINYTEXT
                    )";
            


            /* This Section was originally for BNS Vampire
            $sql="CREATE TABLE if not exists $dBs.characters(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), 
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
		$sql="CREATE TABLE if not exists $dBs.games(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), name CHAR(100), date DATE)";
		mysqli_query($con,$sql);
	}
	if(!mysqli_query($con,'select 1 from `char_games`'))
	{
		#creates a table to associate the many games to many characters, so that you can have multiple games attended by multiple characters, SQL stuff
		$sql="CREATE TABLE if not exists $dBs.char_games(characters_ID INT, games_ID INT, CONSTRAINT char_games_att PRIMARY KEY(characters_ID, games_ID), 
                        CONSTRAINT FK_char_games FOREIGN KEY (characters_ID) REFERENCES $dBs.characters (ID), CONSTRAINT FK_game FOREIGN KEY (games_ID) REFERENCES $dBs.games (ID))";
		mysqli_query($con,$sql);
	}
        if(!mysqli_query($con,'select 1 from `downtimes`'))
	{
		#creates a table to store downtimes, associating each downtime to a game and a character.
		$sql="CREATE TABLE if not exists $dBs.downtimes(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), game_ID INT, character_ID INT, downtime TEXT, response TEXT)";
		mysqli_query($con,$sql);
	}
	if(!mysqli_query($con,'select 1 from `powers`'))
        {
            $sql="CREATE TABLE if not exists $dBs.powers(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), name TINYTEXT)";
            mysqli_query($con, $sql);
        }
        if(!mysqli_query($con,'select 1 from `char_powers`'))
        {
            $sql="CREATE TABLE if not exists $dBs.char_powers(characters_ID INT, powers_ID INT, CONSTRAINT char_powers_list PRIMARY KEY (characters_ID, powers_ID), 
                    CONSTRAINT FK_char_powers FOREIGN KEY (characters_ID) REFERENCES $dBs.characters (ID), CONSTRAINT FK_power FOREIGN KEY (powers_ID) REFERENCES $dBs.powers (ID))";
            mysqli_query($con, $sql);
        }
        if(!mysqli_query($con,'select 1 from `merits`'))
        {
            $sql="CREATE TABLE if not exists $dBs.merits(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), name TINYTEXT, cost TINYINT)";
            mysqli_query($con, $sql);
        }
        if(!mysqli_query($con,'select 1 from `char_merits`'))
        {
            $sql="CREATE TABLE if not exists $dBs.char_merits(characters_ID INT, merits_ID INT, CONSTRAINT char_merits_list PRIMARY KEY (characters_ID, merits_ID), 
                    CONSTRAINT FK_char_merits FOREIGN KEY (characters_ID) REFERENCES $dBs.characters (ID), CONSTRAINT FK_merit FOREIGN KEY (merits_ID) REFERENCES $dBs.merits (ID))";
            mysqli_query($con, $sql);
        }
}

#Adds a new user to the database  TODO: Check if the same user exists and report errors back to the user.
function newUser($con,$email,$password)
{
	
	$sql="INSERT INTO $dBs.users (username,password,level) VALUES('" . $email . "','" . passHash($password) . "', 4)";
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
function passCheck($con, $pass, $username, $dBs)
{
	
	$sql = "SELECT password FROM $dBs.user WHERE username='" . $username . "' LIMIT 1";
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
function login($con,$name,$pass,$dBs)
{
	if(passCheck($con,$pass,$name,$dBs))
	{
		session_start();
		loadSession($con, $name, $dBs);
	}
}
#loads the successful login into the session handler with all characters that that player is allowed to handle.
function loadSession($con, $name, $dBs)
{
	$_SESSION['User']=$name;
	$_SESSION['UserID']=SQLQUERY($con,"SELECT ID FROM $dBs.players WHERE username='" . $name . "'");
	$_SESSION['characters']=SQLQUERY($con,"SELECT * FROM $dBs.characters WHERE PLAYER_ID='" . $_SESSION['UserID'] . "'");
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