function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

function testFoo() {
  // This test will pass
  if (foo(0, '0') === false) {
    console.log('Test passed');
  } else {
    console.log('Test failed');
  }
}