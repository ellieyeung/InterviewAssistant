## Inspiration
As a group of students who is interviewing for internships and full time jobs, we are lacking opportunities to practice our interview abilities. This was created as an intent to be able to help students practice as many times as they'd like with an interactive bot.

## What it does
Users create accounts with their information, including their skills and experience. The website will then generate a list of relevant general and technical questions connected to each user's profile.

Everytime the skill is ran, Alexa will then take a couple general questions and a couple technical question randomly from the list of questions to prompt the user to answering. It will give candidates a chance to practice interviews in a more practical manner for as many times as they want.

Originally named InterviewAnalysis, our original idea also wanted to save the candidates' words into our database, and the user can open it in their web profile. Each interview will have highlights of excessive words such as "um"s and "like"s, and will have a percentage of positive/negative sentiment based on a sentimental analysis. However, due to the current limitations of Alexa, we were not able to save the candidates' words into our database.

## How I built it
Using a template named ChemistryFlashCards from Alexa samples, we modified the code to prompt user with different questions based on different websites' recommendations on interview questions.

## Challenges I ran into
Alexa does not dictate. We initially wanted to record responses from the candidate to analyse, however, Alexa does not have any built-in intents to save the candidates words.

## Accomplishments that I'm proud of
We learned Alexa, web development, and DynamoDB from scratch, also we were proud of our problem solving abilities and our flexibility and efficiency of coming up with alternatives.

## What I learned
We learned a lot of Alexa's capabilities and limitations. We also learned how to solve a problem efficiently and using workarounds with a time constraint.

## What's next for InterviewAssistant
When Alexa comes up with more capabilities, which we have suggested, we can take this further to analyze the work, changing it back to InterviewAnalysis.