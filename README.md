# bartlettbrands-com
Main Bartlett Brands Site (bartlettbrands.com) which includes the WordPress blog

## Development Overview (bartlettbrands.com)
1. use our git repositories to manange new code between developers
2. copy and paste file changes via FTP (for now) just like we have been
  - IMPORTANT: make sure you're the only one making changes
  - IMPORTANT: make local changes in your git, don't edit directly on FTP

## Intitial Process
Create a new directory and clone the git repo.
```bash
$ cd PATH_TO_DIRECTORY
$ git clone COPY_GIT_CLONE_LINK
$ cd bartlettbrands-com
```

## Dev Process
These have reusable chunks, so each part of the process is a group of steps.
I'm using a system with `master` as our main branch and `nate-example-fix` as our new branch.

### A. Create a new branch
Make sure to use your name or initials as the prefix for every branch.
```bash
$ git checkout -b nate-example-fix
```

### B. Sync your local branch with the Master Repo
```bash
$ cd PATH_TO_DIRECTORY/bartlettbrands-com
$ git checkout master
$ git pull
$ git checkout nate-example-fix
$ git rebase master
```

### C. Make your code changes
Have you synced your branch with Master?
  - If No, do `group B`
  - If Yes, continue...
```bash
$ git add -A
$ git commit -m "The link wasn't working"
```
To make new changes, just redo this group.

### D. Create Pull Request
Are you ready to put your code into the master repository?
  - If No, keep making changes using `group C`.
  - If Yes, continue...
Get the latest code from master. Redo `group B`. Then push your local branch to github
```bash
git push -u origin nate-example-fix
```
Head to github, find your branch name, and add a new Pull Request. Wait for approvals.

### E. Merge into Master
Have you been approved to merge into master?
  - If No, go back to `group D`
  - If Yes, continue...
Get the latest code from master. Redo `group B`. Then re-checkout master and continue...
```bash
$ git checkout master
$ git merge nate-example-fix --ff-only
$ git push
```
Then delete your branches
```bash
$ git branch -d nate-example-fix
$ git branch origin :nate-example-fix
```
Now you can create a new branch starting back at `group A`.

## Helpful Git Steps
Seeing which files haven't been committed
```bash
$ git status
```
Seeing which branches you have or are on
```bash
$ git branch
```
Seeing all branches including the ones on github
```bash
$ git branch -a
```
