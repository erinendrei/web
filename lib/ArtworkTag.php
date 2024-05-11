<?

use Exceptions\InvalidArtworkTagException;

use function Safe\preg_match;
use function Safe\preg_replace;

class ArtworkTag extends Tag{
	// *******
	// GETTERS
	// *******

	protected function GetUrl(): string{
		if($this->_Url === null){
			$this->_Url = '/artworks?query=' . Formatter::MakeUrlSafe($this->Name);
		}

		return $this->_Url;
	}

	// *******
	// METHODS
	// *******

	/**
	 * @throws Exceptions\InvalidArtworkTagException
	 */
	public function Validate(): void{
		$error = new Exceptions\InvalidArtworkTagException($this->Name);

		$this->Name = mb_strtolower(trim($this->Name));
		// Collapse spaces into one
		$this->Name = preg_replace('/[\s]+/ius', ' ', $this->Name);

		if(strlen($this->Name) == 0){
			$error->Add(new Exceptions\InvalidArtworkTagNameException());
		}

		if(strlen($this->Name) > ARTWORK_MAX_STRING_LENGTH){
			$error->Add(new Exceptions\StringTooLongException('Artwork tag: '. $this->Name));
		}

		if(preg_match('/[^\sa-z0-9]/ius', $this->Name)){
			$error->Add(new Exceptions\InvalidArtworkTagNameException());
		}

		if($error->HasExceptions){
			throw $error;
		}
	}

	/**
	 * @throws InvalidArtworkTagException
	 */
	public function Create(): void{
		$this->Validate();

		Db::Query('
			INSERT into Tags (Name)
			values (?)
		', [$this->Name]);
		$this->TagId = Db::GetLastInsertedId();
	}

	/**
	 * @throws Exceptions\InvalidArtworkTagException
	 */
	public static function GetOrCreate(ArtworkTag $artworkTag): ArtworkTag{
		$result = Db::Query('
				SELECT *
				from Tags
				where Name = ?
			', [$artworkTag->Name], 'ArtworkTag');

		if(isset($result[0])){
			return $result[0];
		}
		else{
			$artworkTag->Create();
			return $artworkTag;
		}
	}
}
