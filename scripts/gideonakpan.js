// Create an object for my profile:
var profile = {
    fullName: "Gideon Akpan",
    ID: "-05298",
    language: "Javascript",
    showProfile : function() {
        return "Hello World, this is " + this.fullName + " with HNGi7 ID: " + this.ID +" using " + this.language + " for stage 2 task.";
      }
};

// Display some data from the object of my profile:
   console.log (profile.showProfile());
