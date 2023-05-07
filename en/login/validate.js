// Importaggio client
const mongoose = require("mongoose");

// creazione connesione al database
const connect = async (user,passwd,dbname) => {
    let db;
    try {
        db = await mongoose.connect(`mongodb://${user}:${passwd}@ConnectED-mongoDB:27017/${dbname}?authSource=admin`);
    }catch(e){
        console.log(e);
        process.exit(0);
    }
    return db;
}

//main
(async () =>{
    //Connesione al Database con le credenziali corrette
    let db = await connect("admin","admin","registro");
    if(db.connection.readyState == 1) console.log("(+ Connesione al Database)");

    // Disconnesione dal database
    await db.disconnect();
    console.log("(- Disconessione dal database)");
    process.exit(0);
})();