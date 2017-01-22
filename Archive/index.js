var Alexa = require('alexa-sdk');

exports.handler = function(event, context, callback){
    var alexa = Alexa.handler(event, context);
};

var handlers = {
    'interviewQuestionsIntent': function () {
        this.emit(':ask', 'Are you ready for your interview?');
    }
};

exports.handler = function(event, context, callback) {
    var alexa = Alexa.handler(event, context);
    alexa.appId = appId;
    alexa.dynamoDBTableName = 'interviewQuestions';
    alexa.registerHandlers(handlers);
    alexa.execute();
};
