<?php
$start_item = (($page_nr-1) * ITEMS_PER_PAGE);

//$sql = "SELECT * FROM livesets LIMIT " . $start_item . ", " . ITEMS_PER_PAGE;
//$sql = "SELECT dj_has_year_has_party.id, party.partyName, year.yearName, dj.djName
//        FROM dj_has_year_has_party
//        INNER JOIN party
//        ON dj_has_year_has_party.party_id=party.id
//        INNER JOIN year
//        ON dj_has_year_has_party.year_id=year.id
//        INNER JOIN genre_has_dj
//        ON dj_has_year_has_party.dj_id=genre_has_dj.dj_id

$sql = "SELECT dj_has_year_has_party.id, party.partyName, organisation.organisationName, year.yearName, dj.djName, genre.genreName
        FROM dj_has_year_has_party
        
        INNER JOIN party_has_organisation
        ON dj_has_year_has_party.party_id=party_has_organisation.party_id
        INNER JOIN organisation
        ON party_has_organisation.organisation_id=organisation.id
        INNER JOIN party
        ON party_has_organisation.party_id=party.id
        
        INNER JOIN year
        ON dj_has_year_has_party.year_id=year.id
        
        
        INNER JOIN genre_has_dj
        ON dj_has_year_has_party.dj_id=genre_has_dj.dj_id
		INNER JOIN genre
		ON genre_has_dj.genre_id=genre.id
		INNER JOIN dj 
		ON genre_has_dj.dj_id=dj.id 
        LIMIT " . $start_item . ", " . ITEMS_PER_PAGE;
$result = $mysqli->query($sql);


$result = convertResultToArray($result);


//SELECT dj_has_year_has_party.id, party.partyName, year.yearName, dj.djName, genre.genreName, organisation.organisationName
//        FROM dj_has_year_has_party
//        INNER JOIN year
//        ON dj_has_year_has_party.year_id=year.id
//
//        INNER JOIN party_has_organisation
//        ON dj_has_year_has_party.party_id=party_has_organisation.party_id
//        INNER JOIN genre_has_dj
//        ON dj_has_year_has_party.dj_id=genre_has_dj.dj_id
//
//        INNER JOIN organisation
//        ON party_has_organisation=organisation.id
//        INNER JOIN party
//        ON party_has_organisation.party_id=party.id
//
//		INNER JOIN genre
//		ON genre_has_dj.genre_id=genre.id
//		INNER JOIN dj
//		ON genre_has_dj.dj_id=dj.id