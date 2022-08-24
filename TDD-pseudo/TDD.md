# Test Driven Development

## What is TDD?

Test Driven Development is the coding practice that starts writing code by writing the tests.
In TDD, testing and quality assurance is built into the coding process and time table.
As you will see from our example today, in TDD, the tests guide and drive the code. We will work in short cycles. First we write our unit test, and the test should fail. Then we write the least amount of code necessary to make the test pass. We then write another test to further define what our objective. Every time there is a red bar, or a failing test, we return to the code to change it in order to make the tests pass. This iterative technique helps us to define clearly what our objective is, to write the simplest solution to pass each test case, and to continue to review our code to refactor it for cleaner code. And we know that our refactor works because we have the test suite to prove it!

---

## Getting into the mindset of TDD

TDD is a practice and a mindset. At the end of the practice we will have code that is tested and refactored. It is a journey to get there, but the journey is rewarding.

How do we get into the mindset of TDD? In our practice today we will start with pseudo code reflecting on OOP concepts. <b>Pseudo code</b> is code that does not run but instead demonstrates the logic we can use to solve the problem in front of us.

## Our Project

We run a pet store, and we need a way to catalog our pets!

In order to do this, we need to apply the principles of OOP! Let's make a "Pet" class together. But we also want to ensure that this class does what we expect it to. So let's apply TDD as well!

What's our first step?
