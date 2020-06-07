// Create an object for my profile:
var profile = {
    fullName: "Gideon Akpan",
    ID: "HNG-05298",
    email: "gideonakpan98@yahoo.com",
    slackname: "gideonakpan",
    language: "Javascript",
    showProfile : function() {
        return "Hello World, this is " + this.fullName + " with HNGi7 ID " + this.ID + " and email " + this.email + " using " + this.language + " for stage 2 task.";
      }
};

// Display some data from the object of my profile:
   console.log (profile.showProfile());
