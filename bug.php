function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

function testFoo() {
  // This test will fail
  if (foo(0, '0') === true) {
    console.log('Test passed');
  } else {
    console.log('Test failed');
  }
}