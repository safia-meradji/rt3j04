function jsonValueKey(jsonString, key) {
    try {
      const jsonObject = JSON.parse(jsonString);
      return jsonObject[key];
    } catch (error) {
      console.error('Erreur lors de l\'analyse du JSON:', error);
      return null;
    }
  }
  const jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
  }`;
  
  const key = "city";
  const value = jsonValueKey(jsonString, key);
  console.log(value); // Affiche "Marseille"
    