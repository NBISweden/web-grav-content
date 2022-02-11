---
title:  '[when to cheat on your principles for speed, the dark art of getting things done](<> "permalink for when to cheat on your principles for speed, the dark art of getting things done")'
visible: true
---
    

February 22, 2018

[![](/assets/img/logos/icon-share-twitter.png)](<https://twitter.com/share?url=https://nbis.se/blog/2018-02-22-cheating-for-speed.html> "Tweet it!")

###  [When to cheat on your principles for speed, the dark art of getting things done](<> "Permalink for When to cheat on your principles for speed, the dark art of getting things done")

By Jorrit Boekel

**On time, on budget, with quality. Choose one, young bioinformatician.**

In the canonical phrasing you could only pick two out of three, but obviously you can’t pick “on budget” if you’re not in the position to hire people, unless there is a throw-money-at-the-problem solution like hardware or outsourcing. So you’re not a boss, and this saying may need modification even further. Often when doing scientific development you are pressed to deliver faster, maybe simply by fear of being scooped. Not to mention the possibility to see your project become obsolete when it comes out. Science moves fast and thus your work moves to the garbage bin fast too.

My first moves in software were heavily influenced by reading too much [Hacker News](<https://news.ycombinator.com>). Having a lot of fun but neither CS degree nor lots of experience in programming meant I had to learn on the spot. After the first phase of very dirty code, came other phases, which included the obvious too-many-abstractions phase, unit testing volatile components phase, and the phase were I used frameworks too heavy for the job. At least I managed to dodge the rewrite everything in $LANGUAGE phase. Having had those, I feel quite well about my process as it evolved. But there is always quicker and dirtier on the one hand, and cleaner, more scalable, and more secure on the other. What to do?

Of course it all depends on the job you are to do. A good rule of thumb is the adage “make it work, make it correct, make it fast”. But I do not think this always holds true. For example, in case you are creating a tool (i.e making it work or correct), and you _need_ to test on large datasets, speed will be extremely beneficial to your development process. So you’d better go and optimize file access, disks, networks and algorithms. Then again, when developing some internal web resource, program performance is probably not even worth looking at before you move on to the next project, and development speed will be king. As a somewhat extreme example, a respected colleague once wondered if I wouldn’t deliver a web resource faster if I skipped developing the backend and let the javascript talk to the database directly. We didn’t end up pursuing this, but I have to mention that my colleague isn’t some beginner with a knack for quick and dirty code, but one of the fastest working bioinformatics developers I have seen. Had the suggestion come at the start of the project, I would have considered it a great way to get a resource up. I took notes for next project, my face still pale with fear of this practice and how many security holes we would introduce.

But you can dig into frameworks too much too, especially if you’re not used to them. Overengineering is a creeping disease. I can start with a quick protoype, and maybe add some [Django](<https://djangoproject.com>), and suddenly I get the urge to create a containerized infrastructure for an [Nginx](<https://nginx.org>) proxy, Django API, some exotic DB and the Javascript framework-of-the-month, all unit, regression and integration tested on a CI platform connected to github. Because we all want to be AmaGoogBookFlix. (Do consider the options, they are valuable possibilities and you may need them.) My way to combat overengineering tendencies is to look at the to-do list and think which things I can postpone to a future version. It’s hardly perfect and still feels like a battle.

The technology stack above was of course an obvious example, but there are frameworks that have value and slow you down at the same time. I feel I am well versed in tool development for and a fan of the [Galaxy](<https://galaxyproject.github.io/>) project for instance, but I can’t help but thinking now and then that I would have analysis pipelines and tools available much faster when deploying them in R, bash or python (especially since I dislike editing XML). There is a price to pay for flexible, shareable tools that install problem free. But maybe a solution where you can have the cake and eat it pops up one day.

Until I find that, nothing is for free. To use a terrible metaphor, technical debt can be cheap as project-inflation eats it up. But anything long-lived, collaborative or critical enough should probably marinate in your development machine longer. Choose wisely.
